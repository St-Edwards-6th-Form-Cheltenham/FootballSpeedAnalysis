// Below: pin number for FOUT
#define PIN_NUMBER 4
// Below: number of samples for averaging
#define AVERAGE 4
#define DATASETSIZE 50
// Below: define to use serial output with python script
//#define PYTHON_OUTPUT
unsigned int doppler_div = 190;
unsigned int samples[AVERAGE];
unsigned int dataset[DATASETSIZE];
// loop counters

unsigned int x;
unsigned int z;
unsigned int i;

void setup() {
  Serial.begin(9600);
  pinMode(PIN_NUMBER, INPUT);
}

void shareData() {
  for (z=1; z < DATASETSIZE; z++){
    unsigned int Ttime = dataset[z];
    unsigned int Freq = 1000000 / Ttime;

    #ifdef PYTHON_OUTPUT
      Serial.write(Freq/doppler_div);
    #else
      //Serial.print(Ttime);
      Serial.print("\r\n");
      Serial.print(Freq);
      Serial.print("Hz : ");
      Serial.print(Freq/doppler_div);
      Serial.print("km/h\r\n");
    #endif
  }
  
}

unsigned int buildDataSet(unsigned int newPoint){
  // add the data to an array with all the data in it.
  unsigned int Ttime = newPoint / AVERAGE;
  dataset[i] = Ttime;
}

unsigned int getDataPoint() {
  noInterrupts();
  pulseIn(PIN_NUMBER, HIGH);
  unsigned int pulse_length = 0;
  for (x = 0; x < AVERAGE; x++)
  {
    pulse_length = pulseIn(PIN_NUMBER, HIGH); 
    pulse_length += pulseIn(PIN_NUMBER, LOW);    
    samples[x] =  pulse_length;
  }
  interrupts();

  // Check for consistency
  bool samples_ok = true;
  unsigned int nbPulsesTime = samples[0];
  for (x = 1; x < AVERAGE; x++)
  {
    nbPulsesTime += samples[x];
    if ((samples[x] > samples[0] * 2) || (samples[x] < samples[0] / 2))
    {
      samples_ok = false;
      return 0;
    }
  }

  if (samples_ok)
  {
    return samples[x];
  }
}

void loop() {
for (i = 1; i < DATASETSIZE; i++){
  if (getDataPoint() != 0){
  // add last data point to the data set.
    buildDataSet(getDataPoint);
  }

  else {
    #ifndef PYTHON_OUTPUT
      Serial.print("Not Working");
    #endif
    }
  }
  // send data to server
  shareData();
}

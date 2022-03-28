// A0 is de inputpin voor de lichtgevoelige weerstand LDR 
// A0 is een analoge ingang
int LDR_In = A0; // de spanningsdeler wordt aangesloten op A0

// variable lichtHoeveelheid
int lichtHoeveelheid;

uint8_t Led1 = D4; // Led op D4
uint8_t Led2 = D5; // Led op D5
uint8_t Led3 = D6; // Led op D6

void setup() {
  Serial.begin(9600); // start de serial monitor 9600 Baud
  pinMode(Led1,OUTPUT); // initialize the pin as output
  pinMode(Led2,OUTPUT);
  pinMode(Led3, OUTPUT);
}

void loop() {
  // lees de input waarde van de LDR
  lichtHoeveelheid = analogRead(LDR_In);
  // schrijf de waarde naar de Serial Monitor
  Serial.println(lichtHoeveelheid);

  if ( lichtHoeveelheid < 750) {
    // doner, Led aan
    digitalWrite(Led1, HIGH);
    }
  else{
    // licht, Led uit
    digitalWrite(Led1, LOW);
    }

  if ( lichtHoeveelheid < 500) {
    digitalWrite(Led2, HIGH);
  }
  else{
    digitalWrite(Led2, LOW);
    }

   if ( lichtHoeveelheid < 250) {
    digitalWrite(Led3, HIGH);
  }
  else{
    digitalWrite(Led3, LOW);
    }



  delay(1000);
}
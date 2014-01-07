//  SHELL
// verify the baudrate with ssty -F /dev/ttyUSB0
//      sudo echo -n "0" > /dev/ttyUSB0
//      sudo echo -n "1" > /dev/ttyUSB0
//

const int outputPin = 13;


void setup()
{
  pinMode(outputPin, OUTPUT);
 // Serial.begin(9600);
  Serial.begin(115200);
}

void loop()
{
  if (Serial.available() > 0) {
    int incomingByte = Serial.read();
    Serial.println(incomingByte, DEC);
   // if (incomingByte == 49) {
    if (incomingByte == '1') {
      digitalWrite(outputPin, HIGH);
    // if (incomingByte == 49) {
    } else if (incomingByte == '0') {
      digitalWrite(outputPin, LOW);
    }
  }
}

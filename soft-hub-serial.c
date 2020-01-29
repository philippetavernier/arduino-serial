#include <SoftwareSerial.h>

// Création d'une liaison série 
// sur les broches 3 (RX) et 2 (TX)
SoftwareSerial mySerial(3, 2); 

void setup()  
{
  // Choix de la vitesse de transmission 
  // pour la liaison avec le moniteur
  Serial.begin(9600);
  Serial.println("Serial OK");
  
  // Choix de la vitesse de transmission 
  // pour la liaison sur les broches 3 et 2
  mySerial.begin(9600);
  Serial.println("mySerial OK");  
}

void loop()
{
  // s'il y a une entrée sur la broche 3
  if (mySerial.available())
  {
    // On l'envoi sur le moniteur
    Serial.println(mySerial.read(),HEX);
  }
}

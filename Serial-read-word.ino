const int max_string_length = 100;
char inData[max_string_length]; 

const char end_char = '\n';

void setup() {
  Serial.begin(9600);
  Serial.println("Begin!"); 
}

void loop() {
    receive_string();
    Serial.print("String received: ");
    Serial.println(inData);
}

void receive_string(){
  int i = 0;
  
  char c = read_char();
  while(c != end_char){
    if(i >= max_string_length)
       break;
       
    inData[i] = c; 
    i++;
    c = read_char();
  }
  inData[i] = '\0';
}

char read_char(){
  while(!Serial.available());
  return Serial.read();
}

// Input the libraries 

#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
// #include "RTClib.h"

// Mendeklarasikan class rtc
// RTC_DS3231 rtc;

// Mendeklarasikan class client 
WiFiClient client;

// Mendeklarasikan SSID dan password 
const char* ssid = "Not found";
const char* pass = "emhhpasswordnya";

// Mendeklarasikan pin yang digunakan dalam variabel lamp 
int lamp = LED_BUILTIN; 

//Your Domain name with URL path or IP address with path
const char* serverName1 = "http://192.168.8.101/striplamp/get_data.php";


void setup() {
  Serial.begin(115200);
  
  // Pin mode lamp 
  pinMode(lamp, OUTPUT);
  digitalWrite (lamp, HIGH);

  //Koneksi ke SSID 
  WiFi.begin(ssid, pass);
  Serial.println("WiFi connecting");
  while(WiFi.status() !=WL_CONNECTED){
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("Connected WiFi network with IP Address : ");
  Serial.println(WiFi.localIP());

  // RTC setting waktu 
  // if(! rtc.begin()){
  //   Serial.println("RTC tidak ditemukan");
  //   Serial.flush();
  //   abort();
  // }
  // rtc.adjust(DateTime(F(__DATE__), F(__TIME__)));

}

void loop() {

  if(WiFi.status()==WL_CONNECTED){
    
// Mendeklarasikan class http
HTTPClient http;

    http.begin(client,serverName1);
    int httpCode = http.GET();
    if(httpCode == 200){
      String payload = http.getString();
      if(payload == "ON") digitalWrite(lamp, LOW);
      else digitalWrite(lamp, HIGH);
    }
    else {
      Serial.print("Error: ");
      Serial.println(httpCode);
    }
    http.end();
  }
}

# SDK MainAPI.net 

- Special Thank's to Dev Summit Developer 2017 ITB Sabuga Bandung 23-Nov-2017
- Thank's to MainAPI for Amazing this API
# Features
- SMS Notification (Completed)
- SMS OTP (Completed)
- Voice OTP (On-Process)
- Finpay02111 (Comming Soon)
- FinpayCC (Comming Soon) 
- TMoney (Comming Soon)
- ArcGIS (Comming Soon)
- Blanja (Comming Soon)
- Helio (Comming Soon)
- TrackLogistic (Comming Soon)
- UDataRiskScoring (Comming Soon)
- VoucherWifi.id (Comming Soon)
- Wifi.Id Locator (On-Process)
# How to Use ?

This Section Describe How to Use this SDK 
#### SMS Notification

 Usage
 **Send SMS**
 

 - MSDN (Your Phone Number)
 - Content (Your Content Message)
 - Editor (Convert `<p>` to `\n`)

 
``` php
$mainAPI = new Mainapi();
$mainAPI->setClient_id("1m7F1hfeuxTxLfHG9nAeSQDfQZga");
$mainAPI->setSecret_id("PTQ2pKhOgIdfLxWTmjE1UL1BSvEa");
$res = $mainAPI->SendSMS($msdn, $content, $editor);
```
Response Success On JSON

``` php
{"code":1,"status":"SUCCESS","message":"RECIPIENT PROCESSED","msgid":9270341239}
```
#### SMS OTP
- Key (Your Unique Key )
- MSDN (Phone Number)
- OTPSTR (OTP String)
- Type (Choice You Want to Send OTP or Verify OTP, in Example Bellow if You want to Send Just Dont Write Type and OTPSTR)
Usage
**Send OTP**

``` php
$mainAPI = new Mainapi();
$mainAPI->setClient_id("1m7F1hfeuxTxLfHG9nAeSQDfQZga");
$mainAPI->setSecret_id("PTQ2pKhOgIdfLxWTmjE1UL1BSvEa");
$res = $mainAPI->otp($key, $msdn);
```
Response Success on JSON 
``` php
{"status":true,"msgId":"9270341782","message":"SUCCESS RECIPIENT PROCESSED."}
```
**Verify**
``` php
$mainAPI = new Mainapi();
$mainAPI->setClient_id("1m7F1hfeuxTxLfHG9nAeSQDfQZga");
$mainAPI->setSecret_id("PTQ2pKhOgIdfLxWTmjE1UL1BSvEa");
$res = $mainAPI->otp($key, $msdn, $type, $otpstr);
```
Response Success On JSON
``` php
{"status":true,"message":"Your OTP is valid"}
```


----------
# Disclaimer
This Project is Un-Official SDK From MainAPI.net.
# Important

This Library Use PHP Curl Warpperby https://github.com/shuber/curl/ Thanks dude for the Amazing Wrapper.



npm install ionic
ionic -v && cordova -v
ionic start {appname} {template}
ionic start pushpe-todo blank

other templates --> tabs, sidemenus

cd {appname}
ionic platform add ios
ionic platform add android

ionic serve ---> Reviewing the app
ionic serve --lab

// A local storage service

npm install -g bower
bower install angular-local-storage --save



// Testing with Phonegap App

npm install -g phonegap
phonegap serve

// Simulator testing
ionic build ios
ionic emulate ios

cordova prepare ios

// Testing as a native app

ionic run android

// change the platform

cordova platform update android@5.0.0

cd appName/plugins
cordova plugins add cordova-plugin-geolocation

ios api key = AIzaSyBtNs7id4I-CZX3_cPFUqCU3aJ04_pELiM
android api key = AIzaSyCGT-8Du3SwJCfdC7aNFqPheR_WTEv_dX0

cordova plugin add cordova-plugin-googlemaps --variable API_KEY_FOR_ANDROID="YOUR_ANDROID_API_KEY_IS_HERE" --variable API_KEY_FOR_IOS="YOUR_IOS_API_KEY_IS_HERE"
cordova plugin add cordova-plugin-googlemaps --variable API_KEY_FOR_ANDROID="AIzaSyCGT-8Du3SwJCfdC7aNFqPheR_WTEv_dX0" --variable API_KEY_FOR_IOS="AIzaSyBtNs7id4I-CZX3_cPFUqCU3aJ04_pELiM"

if we got an error

cordova plugin rm cordova-plugin-googlemaps
cordova plugin rm com.googlemaps.ios
cordova plugin add cordova-plugin-googlemaps --variable API_KEY_FOR_ANDROID="AIzaSyCGT-8Du3SwJCfdC7aNFqPheR_WTEv_dX0" --variable API_KEY_FOR_IOS="AIzaSyBtNs7id4I-CZX3_cPFUqCU3aJ04_pELiM"

then again api key command



cordova plugin add cordova-plugin-locationservices

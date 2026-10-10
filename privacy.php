<?php
/**
 * Politica de privacidade autonoma: um unico ficheiro, sem base de dados.
 * Uso: privacy.php?app=<chave da app>   (ex. ?app=alarmefree)
 * Os dados de cada app estao no JSON abaixo ($DATA). Editar apenas o JSON.
 * Nao por aqui nada confidencial: tudo o que for lido sai na pagina publica.
 */

$DATA = <<<'JSON'
{
  "company": "JetMob",
  "email": "jetmobile.dev@gmail.com",
  "defaults": {
    "permissions": {
      "CAMERA": "Take photos.",
      "ACCESS_FINE_LOCATION": "Read your precise location.",
      "ACCESS_COARSE_LOCATION": "Read your approximate location.",
      "READ_MEDIA_IMAGES": "Let you pick an image from your gallery.",
      "POST_NOTIFICATIONS": "Show notifications.",
      "USE_BIOMETRIC": "Unlock with fingerprint or face.",
      "SYSTEM_ALERT_WINDOW": "Draw over other apps.",
      "FOREGROUND_SERVICE": "Keep a feature running while the screen is off.",
      "RECEIVE_BOOT_COMPLETED": "Restart a feature after the device reboots.",
      "REQUEST_IGNORE_BATTERY_OPTIMIZATIONS": "Keep a feature running reliably in the background."
    }
  },
  "apps": {
    "alarmefree": {
      "enabled": true,
      "name": "Anti Theft & Curious Alarm",
      "package": "pt.jmdev.alarmefree",
      "child_directed": false,
      "uses_ads": true,
      "uses_billing": true,
      "sdks": ["Google AdMob", "Google User Messaging Platform", "Google Play Billing"],
      "data_leaves_device": [
        "If you turn on the e-mail alert, the app sends an e-mail through the SMTP server and account that you configure yourself. The e-mail contains the time of the alert, the intruder photo (if any) and a map link with the location (if any). It goes to the address you choose; JetMob does not receive it."
      ],
      "permissions": {
        "CAMERA": "Takes a photo of whoever tries to unlock or move your device (the intruder photo). The photo is saved on your phone and, only if you enable the e-mail alert, attached to that e-mail.",
        "ACCESS_FINE_LOCATION": "Optional. Adds the device location to the intrusion report and to the e-mail alert, so you can find your device. Only used when you enable it in Settings.",
        "ACCESS_COARSE_LOCATION": "Approximate version of the location above.",
        "READ_MEDIA_IMAGES": "Lets you choose an image from your gallery for the lock screen or alarm. The image is not uploaded.",
        "USE_BIOMETRIC": "Lets you disarm the alarm with your fingerprint or face. Biometric data stays in Android and is never accessed by the app.",
        "POST_NOTIFICATIONS": "Shows the alarm status and the intrusion-detected notification.",
        "SYSTEM_ALERT_WINDOW": "Shows the alarm screen over other apps when an intrusion is detected.",
        "FOREGROUND_SERVICE": "Keeps the alarm running while the screen is off.",
        "RECEIVE_BOOT_COMPLETED": "Re-arms the alarm after the device restarts.",
        "REQUEST_IGNORE_BATTERY_OPTIMIZATIONS": "Prevents Android from stopping the alarm in the background."
      },
      "to_confirm": ["CALL_PHONE", "READ_CONTACTS", "RECORD_AUDIO", "WRITE_EXTERNAL_STORAGE"]
    },
    "imc_adulto2": {
      "enabled": true,
      "name": "BMI Calculator",
      "package": "pt.JMdev.imc_adulto2",
      "child_directed": false,
      "uses_ads": true,
      "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform", "Firebase Authentication", "Firebase Realtime Database", "Google Sign-In"],
      "data_leaves_device": [
        "Your measurements (weight, height, waist, hips and related values) are stored on the device. If you sign in with Google to use the optional cloud backup, they are synchronised with Firebase (Google) under your account. Without signing in, nothing leaves the device."
      ],
      "permissions": {},
      "to_confirm": ["VIBRATE", "FOREGROUND_SERVICE", "BILLING"]
    },
    "imc_inf": {
      "enabled": true,
      "name": "IMC Infantil",
      "package": "pt.JMdev.imc_inf",
      "child_directed": true,
      "uses_ads": true,
      "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [
        "Children's data (name, birth date, sex, height, weight and measurements) is stored only on the device and is never sent to us or to any server.",
        "Ads shown in this app are configured for child-directed treatment: no personalised ads."
      ],
      "permissions": {
        "VIBRATE": "Gives haptic feedback when navigating the app.",
        "WRITE_EXTERNAL_STORAGE": "Lets you export the children's data to a file on your device for backup.",
        "POST_NOTIFICATIONS": "Shows reminders to record a new measurement.",
        "RECEIVE_BOOT_COMPLETED": "Re-schedules measurement reminders after the device restarts."
      },
      "to_confirm": []
    },
    "sopa_letras": {
      "enabled": true,
      "name": "Word Search",
      "package": "pt.JMdev.sopa_letras",
      "child_directed": false,
      "uses_ads": true,
      "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "VIBRATE": "Gives haptic feedback when you mark a word."
      },
      "to_confirm": ["FOREGROUND_SERVICE", "BILLING", "Firebase (Remote Config/Installations come from a library, not used in app code)"]
    },
    "big_buzinas_new": {
      "enabled": true,
      "name": "Big Horns",
      "package": "pt.jmdev.big_buzinas_new",
      "child_directed": false,
      "uses_ads": true,
      "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "WRITE_SETTINGS": "Lets you set a horn sound as your phone ringtone or notification sound. The app only changes the sound you choose.",
        "VIBRATE": "Gives haptic feedback when a horn is played."
      },
      "to_confirm": ["FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK"]
    },
    "aceleradormota": {
      "enabled": true, "name": "Motorcycle Throttle", "package": "pt.jmdev.aceleradormota",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": { "VIBRATE": "Gives haptic feedback while you use the throttle." },
      "to_confirm": ["FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK"]
    },
    "alarms_sounds": {
      "enabled": true, "name": "Alarms Sounds", "package": "com.jetmob.alarms_sounds",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": { "WRITE_SETTINGS": "Lets you set a sound as your phone ringtone, notification or alarm sound. The app only changes the sound you choose." },
      "to_confirm": ["VIBRATE", "FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK", "Firebase Remote Config (declared, code disabled)"]
    },
    "apito_canino": {
      "enabled": true, "name": "Dog Whistle", "package": "pt.jmdev.apito_canino",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": { "VIBRATE": "Gives haptic feedback while the whistle plays." },
      "to_confirm": ["FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK", "READ_PHONE_STATE", "READ_EXTERNAL_STORAGE", "WRITE_EXTERNAL_STORAGE"]
    },
    "funny_horns_cars": {
      "enabled": true, "name": "Funny Horns", "package": "pt.jmdev.funny_horns_cars",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {},
      "to_confirm": ["VIBRATE", "FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK"]
    },
    "call_log_clear": {
      "enabled": true, "name": "Call Log Clear", "package": "pt.jmdev.call_log_clear",
      "child_directed": false, "uses_ads": true, "uses_billing": true,
      "sdks": ["Google AdMob", "Google User Messaging Platform", "Google Play Billing"],
      "data_leaves_device": [
        "Call log entries, contacts and backups stay on your device. If you use the feedback option, the e-mail is composed through your own e-mail app.",
        "Google AdMob and Google Play Billing receive the advertising ID and the data needed to show ads and process purchases."
      ],
      "permissions": {
        "READ_CONTACTS": "Shows contact names for calls and lets you build allow/block lists.",
        "WRITE_CONTACTS": "Lets you edit contacts you choose from inside the app.",
        "READ_CALL_LOG": "Reads your call history so you can review and delete entries.",
        "WRITE_CALL_LOG": "Deletes or restores call-log entries you choose.",
        "CALL_PHONE": "Lets you place a call from inside the app.",
        "READ_PHONE_STATE": "Detects when a call ends so the app can apply your cleaning rules.",
        "SYSTEM_ALERT_WINDOW": "Shows the end-of-call screen over other apps.",
        "READ_EXTERNAL_STORAGE": "Reads the backup files you choose to restore.",
        "WRITE_EXTERNAL_STORAGE": "Saves call-log backup files to your device when you create a backup.",
        "POST_NOTIFICATIONS": "Shows notifications about automatic actions.",
        "FOREGROUND_SERVICE": "Keeps the automatic cleaning running in the background.",
        "RECEIVE_BOOT_COMPLETED": "Restarts the automatic cleaning after the device reboots."
      },
      "to_confirm": ["ACTION_MANAGE_OVERLAY_PERMISSION declared as permission", "OPPO_COMPONENT_SAFE", "huawei USE_COMPONENT"]
    },
    "drum": {
      "enabled": true, "name": "Drum Kit", "package": "pt.JMdev.drum",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "VIBRATE": "Gives haptic feedback when you hit a drum.",
        "HIGH_SAMPLING_RATE_SENSORS": "Reads the motion sensors quickly so Air Drum reacts to your movements. Sensor data is not stored or sent."
      },
      "to_confirm": ["READ_MEDIA_AUDIO", "READ_EXTERNAL_STORAGE", "WRITE_EXTERNAL_STORAGE", "FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK", "child-directed decision (rating T)"]
    },
    "flash_notify": {
      "enabled": true, "name": "Flash Notify", "package": "pt.jetmob.flash_notify",
      "child_directed": false, "uses_ads": true, "uses_billing": true,
      "sdks": ["Google AdMob", "Google User Messaging Platform", "Google Play Billing"],
      "data_leaves_device": [],
      "permissions": {
        "READ_PHONE_STATE": "Detects incoming calls so the flash can blink.",
        "SYSTEM_ALERT_WINDOW": "Draws over other apps so the flash/screen alert works.",
        "QUERY_ALL_PACKAGES": "Lists installed apps so you can choose which ones trigger the flash. The list stays on the device.",
        "RECEIVE_BOOT_COMPLETED": "Restarts the notification listener after the device reboots.",
        "REQUEST_IGNORE_BATTERY_OPTIMIZATIONS": "Keeps the flash alerts reliable in the background.",
        "VIBRATE": "Gives haptic feedback."
      },
      "to_confirm": ["Notification listener service (reads notifications locally to trigger the flash)", "FOREGROUND_SERVICE"]
    },
    "sons_grilos": {
      "enabled": true, "name": "Crickets Sounds", "package": "pt.jmdev.sons_grilos",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": { "VIBRATE": "Gives haptic feedback when you play a sound." },
      "to_confirm": ["FOREGROUND_SERVICE", "BILLING", "WAKE_LOCK", "child-directed decision (rating G)"]
    },
    "luz_zen": {
      "enabled": true, "name": "Zen Light", "package": "pt.jetmob.luz_zen",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "WAKE_LOCK": "Keeps the screen on while the light is shown.",
        "VIBRATE": "Gives haptic feedback."
      },
      "to_confirm": ["FOREGROUND_SERVICE", "BILLING"]
    },
    "maquina_barbear": {
      "enabled": true, "name": "Barber Clipper", "package": "pt.jmdev.maquina_barbear",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "WAKE_LOCK": "Keeps the screen on while the clipper runs.",
        "VIBRATE": "Vibrates the phone to simulate the clipper."
      },
      "to_confirm": ["WRITE_SETTINGS (declared, no use found)", "FOREGROUND_SERVICE", "BILLING"]
    },
    "sabreluz": {
      "enabled": true, "name": "Light Saber", "package": "pt.jmdev.sabreluz",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": { "VIBRATE": "Gives haptic feedback when you swing the saber." },
      "to_confirm": ["WAKE_LOCK", "FOREGROUND_SERVICE", "BILLING"]
    },
    "sinos_e_campainhas": {
      "enabled": true, "name": "Bells and Doorbells", "package": "pt.jmdev.sinos_e_campainhas",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "WRITE_SETTINGS": "Lets you set a sound as your phone ringtone or notification sound. The app only changes the sound you choose.",
        "VIBRATE": "Gives haptic feedback."
      },
      "to_confirm": ["WAKE_LOCK", "FOREGROUND_SERVICE", "BILLING", "Firebase Remote Config (declared, code disabled)"]
    },
    "Police": {
      "enabled": true, "name": "Police Siren", "package": "pt.JMdev.Police",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "VIBRATE": "Vibrates with the siren.",
        "WAKE_LOCK": "Keeps the screen on while the siren plays."
      },
      "to_confirm": ["WRITE_SETTINGS (no use found)", "ACCESS_NOTIFICATION_POLICY (no use found)", "FOREGROUND_SERVICE", "BILLING"]
    },
    "soundmachine": {
      "enabled": true, "name": "Sound Machine", "package": "pt.jetmob.soundmachine",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": {
        "VIBRATE": "Gives haptic feedback when you play a sound.",
        "READ_MEDIA_AUDIO": "Lets you choose an audio file from your device. The file is not uploaded.",
        "READ_EXTERNAL_STORAGE": "Same as above, on older Android versions."
      },
      "to_confirm": ["WRITE_EXTERNAL_STORAGE", "FOREGROUND_SERVICE", "BILLING", "Firebase Remote Config (declared, code disabled)"]
    },
    "sport_timer": {
      "enabled": true, "name": "Sport Timer", "package": "pt.jmdev.sport_timer",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform", "Firebase Authentication", "Firebase Realtime Database", "Firebase Cloud Messaging", "Google Sign-In"],
      "data_leaves_device": [
        "If you sign in with Google to use the optional cloud features, your workouts and schedule are stored in Firebase (Google) under your account, and a Firebase Cloud Messaging token is used to deliver notifications. Without signing in, workout data stays on the device."
      ],
      "permissions": {
        "VIBRATE": "Vibrates on interval changes.",
        "WAKE_LOCK": "Keeps the screen on during a workout.",
        "RECEIVE_BOOT_COMPLETED": "Re-schedules your workout reminders after the device restarts.",
        "POST_NOTIFICATIONS": "Shows workout reminders and notifications."
      },
      "to_confirm": ["DISABLE_KEYGUARD (no use found)", "FOREGROUND_SERVICE", "BILLING"]
    },
    "Tazer": {
      "enabled": true, "name": "Taser", "package": "pt.JMdev.Tazer",
      "child_directed": false, "uses_ads": true, "uses_billing": true,
      "sdks": ["Google AdMob", "Google User Messaging Platform", "Google Play Billing"],
      "data_leaves_device": ["The one-time purchase to remove ads is processed by Google Play."],
      "permissions": {
        "VIBRATE": "Vibrates when the taser is fired.",
        "WAKE_LOCK": "Keeps the screen on while the app is in use."
      },
      "to_confirm": ["CAMERA", "FLASHLIGHT (from CameraX, confirm flash usage)", "WRITE_SETTINGS (no use found)", "FOREGROUND_SERVICE"]
    },
    "vibrador_digital": {
      "enabled": true, "name": "Digital Vibrator", "package": "pt.jmdev.vibrador_digital",
      "child_directed": false, "uses_ads": true, "uses_billing": false,
      "sdks": ["Google AdMob", "Google User Messaging Platform"],
      "data_leaves_device": [],
      "permissions": { "VIBRATE": "Makes the phone vibrate." },
      "to_confirm": ["WAKE_LOCK", "FOREGROUND_SERVICE", "BILLING"]
    }
  }
}
JSON;

$cfg = json_decode($DATA, true);
if (!is_array($cfg)) {
	http_response_code(500);
	die('Configuration error: invalid JSON (' . htmlspecialchars(json_last_error_msg()) . ')');
}

$key = $_GET['app'] ?? '';
$app = $cfg['apps'][$key] ?? null;
if (!$app || empty($app['enabled'])) {
	http_response_code(404);
	die('App not found: ' . htmlspecialchars($key));
}

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$company = $cfg['company'];
$email = $cfg['email'];
$name = $app['name'];
$perms = $app['permissions'] ?? [];
$sdks = $app['sdks'] ?? [];
$leaves = $app['data_leaves_device'] ?? [];
$child = !empty($app['child_directed']);
$ads = !empty($app['uses_ads']);
?><!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?= h($name) ?> by <?= h($company) ?> - Privacy policy</title>
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		:root{--bg:#f3f5f9;--card:#fff;--text:#2b3340;--muted:#6b7685;--accent:#2563eb;--line:#e5e9f0}
		@media (prefers-color-scheme:dark){:root{--bg:#12161c;--card:#1b212a;--text:#e3e8ef;--muted:#9aa5b4;--accent:#6ea0ff;--line:#2c3440}}
		body{margin:0;padding:24px 16px;background:var(--bg);color:var(--text);font:16px/1.6 -apple-system,"Segoe UI",Roboto,Helvetica,Arial,sans-serif}
		.card{max-width:760px;margin:0 auto;background:var(--card);border:1px solid var(--line);border-radius:14px;padding:28px 32px;box-shadow:0 2px 12px rgba(0,0,0,.06)}
		header{border-bottom:2px solid var(--accent);margin-bottom:8px;padding-bottom:12px}
		h1{margin:0;font-size:1.7rem}
		.sub{margin:4px 0 0;color:var(--muted)}
		h3{margin:28px 0 8px;font-size:1.1rem;color:var(--accent)}
		p{margin:8px 0}
		ul{padding-left:22px}li{margin:6px 0}
		a{color:var(--accent)}
		@media (max-width:480px){.card{padding:20px 18px}}
	</style>
</head>
<body><main class="card">
	<header><h1><?= h($name) ?></h1><p class="sub">by <?= h($company) ?> &middot; Privacy policy</p></header>

	<p>This privacy policy governs your use of the software application <b><?= h($name) ?></b> (APP) for mobile devices that was created by <b><?= h($company) ?></b>.
	<br>Application is available to download in Google Play (<a href="https://play.google.com/store/apps/details?id=<?= h($app['package']) ?>">link to Application</a>).</p>

	<h3>What information we collect?</h3>
	<p>Application does not collect personal information like name, surname, age, place of birth, and we do not ask you to create an account.</p>
<?php if ($ads) { ?>
	<p>However, the third-party services listed below may automatically collect the following data from your device:</p>
	<ul>
		<li><b>Advertising ID</b> (Google Advertising ID, which you can reset or delete in your device settings);</li>
		<li><b>IP address</b> and approximate location derived from it;</li>
		<li><b>Usage data</b> (e.g. ad interactions, app launches, device model, operating system version, language);</li>
		<li><b>Diagnostics and crash data</b>.</li>
	</ul>
	<p><b>Purposes:</b> showing ads (including personalised ads where you consent), measuring ad performance and app usage statistics, detecting and fixing errors, preventing fraud<?= !empty($app['uses_billing']) ? ', and processing in-app purchases' : '' ?>.</p>
<?php } ?>
<?php if ($leaves) { ?>
	<h3>Data you choose to send</h3>
	<ul>
<?php foreach ($leaves as $t) echo '		<li>' . h($t) . "</li>\n"; ?>
	</ul>
<?php } ?>
<?php if ($perms) { ?>
	<h3>Sensitive permissions and features</h3>
	<p>We use the following features in our App that are deemed sensitive on Google Play:</p>
	<ul>
<?php foreach ($perms as $p => $why) {
	if ($why === '' && isset($cfg['defaults']['permissions'][$p])) $why = $cfg['defaults']['permissions'][$p];
	echo '		<li><b>' . h($p) . '</b><br>' . h($why) . "</li>\n";
} ?>
	</ul>
<?php } ?>
<?php if ($ads) { ?>
	<h3>Advertisement</h3>
	<p>Google Admob privacy policy is here: <a href="https://support.google.com/admob/answer/6128543?hl=en">https://support.google.com/admob/answer/6128543?hl=en</a>.</p>
	<ul>
		<li>Third party vendors, including Google, use cookies to serve ads based on a user's prior visits to your website.</li>
		<li>Google's use of the DoubleClick cookie enables it and its partners to serve ads to your users based on their visit to your sites and/or other sites on the Internet.</li>
		<li>Users may opt out of the use of the DoubleClick cookie for interest-based advertising by visiting Ads Settings. (Alternatively, you can direct users to opt out of a third-party vendor's use of cookies for interest based advertising by visiting aboutads.info.)</li>
		<li>To opt out of some third-party vendor's use of cookies for interest-based advertising visit <a href="http://aboutads.info/">aboutads.info</a></li>
	</ul>
<?php } ?>
<?php if ($sdks) { ?>
	<h3>Third parties</h3>
	<ul>
<?php foreach ($sdks as $s) echo '		<li>' . h($s) . "</li>\n"; ?>
	</ul>
	<p>Payment data, when applicable, is handled by Google Play and never reaches us. See the <a href="https://policies.google.com/privacy">Google Privacy Policy</a>.</p>
<?php } ?>
<?php if ($ads) { ?>
	<h3>Consent and how to withdraw it</h3>
	<p>Where required by law (e.g. in the European Economic Area, the United Kingdom and Switzerland) the app asks for your consent before showing personalised ads. You can change or withdraw your consent at any time using the <b>Privacy</b> button in the app Settings, which re-opens the consent form. You can also reset or delete your advertising ID in your Android settings (Settings &gt; Privacy &gt; Ads).</p>
<?php } ?>
	<h3>Retention and deletion</h3>
	<p>We do not keep personal data on our own servers. Data collected by third-party services is retained according to their own policies. Data stored by the app (settings, photos and records it creates) stays only on your device and is deleted when you uninstall the app or clear its data.<?= $ads ? ' To delete advertising-related data, reset your advertising ID and withdraw your consent as described above.' : '' ?></p>

	<h3>Children</h3>
<?php if ($child) { ?>
	<p>This app is designed for children and follows the Google Play Families Policy. Ads shown are child-directed, and we do not collect personal data from children.</p>
<?php } else { ?>
	<p>The app is not directed to children under 13. We do not knowingly collect personal data from children.</p>
<?php } ?>

	<h3>Your rights and requests</h3>
	<p>You may request access to, correction or deletion of any data we hold about you, or ask any privacy question, by contacting us at the email below. We will reply as soon as possible.</p>

	<h3>Contact</h3>
	Developer: <b><?= h($company) ?></b><br>
	To contact us, including for data requests, please use email: <u><?= h($email) ?></u>
</main></body></html>

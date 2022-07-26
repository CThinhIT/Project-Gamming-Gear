CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 8 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(191) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `image_avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_details_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_details_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_details_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 42 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci
INSERT INTO
  `brands`(`name`, `description`, `slug`)
VALUES
  ('Logitech', 'feel the game', 'Logitech'),
  ('MSI', 'feel the game', 'MSI'),
  ('Asus', 'feel the game', 'Asus'),
  ('Sony', 'feel the game', 'Sony'),
  ('Razer', 'feel the game', 'Razer')
INSERT INTO
  `categories`(`name`, `slug`, `icon`)
VALUES
  ('Gamepads', 'Gamepads', 'bx bx-joystick'),
  ('Computer mouse', 'Computer mouse', 'bx bx-mouse'),
  ('Gaming screen', '[Gaming screen', 'bx bx-desktop'),
  ('Keyboards', 'Keyboards', 'bx bxs-keyboard'),
  (
    'Game headphones',
    'Game headphones',
    'bx bx-headphone'
  )
INSERT INTO
  `products`(
    `name`,
    `price`,
    `description`,
    `category_id`,
    `brand_id`,
    `image_avatar`,
    `image_details_1`,
    `image_details_2`,
    `image_details_3`
  )
VALUES
  (
    'ROG Strix Scope',
    150,
    '- Features - Our durable, robust design gives you a stable foundation while cradling your devices. A convenient battery life indicator and on/off power button makes this wireless Bluetooth keyboard connection visible. Comes with 2 x AAA batteries
- Limited 2-Year Warranty - This means you’re covered for specific parts and types of damage & for differing durations depending on the product type. As a leader in tech accessories, you can buy computer keyboards, mice & accessories with confidence',
    4,
    3,
    'Asus ROG Strix Scope TKL Gundam Edition-keyboard-1.png',
    'Asus ROG Strix Scope TKL Gundam Edition-keyboard-2.png',
    'Asus ROG Strix Scope TKL Gundam Edition-keyboard-3.png',
    'Asus ROG Strix Scope TKL Gundam Edition-keyboard-4.png'
  ),
  (
    'ROG Gladius II',
    65,
    '- Click, Point & Scroll - Sporting a simple, pebble-shaped design, easily click, point, and scroll using the three essential buttons you need. This cordless mouse for laptop has everthing you need and nothing you do not
- Limited 2-year Warranty - Our limited 2-year warranty on all computer keyboards, mice & accessories means you’re covered for specific parts and types of damage, and for differing durations depending on the product type',
    2,
    3,
    'ROG Gladius II-mouse-1.png',
    'ROG Gladius II-mouse-2.png',
    'ROG Gladius II-mouse-3.png',
    'ROG Gladius II-mouse-4.png'
  ),
  (
    'Gamepad ROG Kunai 3',
    278,
    '- Game-console gamepad can be utilized in handheld mode, mobility mode and all-in-one
- Handheld mode offers a zero latency USB 2.0 Type-C connection
- Ergonomic design and excellent key feelings
- Up to 6 hrs in wireless mode
- USB Type C 2.0 and Bluetooth connection',
    1,
    3,
    'Gamepad ROG Kunai 3-gamepad-1.png',
    'Gamepad ROG Kunai 3-gamepad-2.png',
    'Gamepad ROG Kunai 3-gamepad-3.png',
    'Gamepad ROG Kunai 3-gamepad-4.png'
  ),
  (
    'ROG Strix XG27AQM EVA',
    941,
    '- 27-inch WQHD (2560 x 1440) HDR gaming monitor with ultrafast 270Hz (overclocking) refresh rate designed for professional gamers and immersive gameplay
- ASUS Fast IPS technology enables a 0.5ms response time (GTG) for sharp gaming visuals with high frame rates
- G-SYNC Compatible, delivering a seamless, tear-free gaming experience',
    3,
    3,
    'ROG Strix XG27AQM EVA Edition-screen-1.png',
    'ROG Strix XG27AQM EVA Edition-screen-2.png',
    'ROG Strix XG27AQM EVA Edition-screen-3.png',
    'ROG Strix XG27AQM EVA Edition-screen-4.png'
  ),
  (
    'ROG Strix Fusion 300',
    69,
    '- Immerse yourself in clear and rich sound thanks to ASUS exclusive sealed chamber design and 50mm Essence driver
- Enjoy a plug-and-play 7.1-channel emulated surround sound system anytime, anywhere with hardware designed by experts',
    5,
    3,
    'ROG Strix Fusion 300-headphone-1.png',
    'ROG Strix Fusion 300-headphone-2.png',
    'ROG Strix Fusion 300-headphone-3.png',
    'ROG Strix Fusion 300-headphone-4.png'
  ),
  (
    'K400 PLUS WIRELESS TOUCH',
    33,
    '- Media-Friendly: The K400 Plus wireless touch TV keyboard gives you integrated, comfortable control of your PC-to-TV entertainment, eliminating the clutter of a separate keyboard and mouse
- Plug-and-Play: Simply plug the Unifying receiver into a USB port and the wireless touchpad keyboard is ready to go; adjust controls using the Logitech Options Software to save preferred settings',
    4,
    1,
    'K400 PLUS WIRELESS TOUCH KEYBOARD-keyboard-1.png',
    'K400 PLUS WIRELESS TOUCH KEYBOARD-keyboard-2.png',
    'K400 PLUS WIRELESS TOUCH KEYBOARD-keyboard-3.png',
    'K400 PLUS WIRELESS TOUCH KEYBOARD-keyboard-4.png'
  ),
  (
    'MX ANYWHERE 3',
    78,
    '- MAGSPEED SCROLLING - Speed, precision, and silence. Effortlessly scroll 1,000 lines at once, and stop on a pixel. Auto-shifts between ratchet and hyper-fast modes.
- GO-ANYWHERE COMFORT – Low-profile design contoured for your hand, with ultra-soft silicone side grips. Built to withstand the bumps and drops of mobile work.',
    2,
    1,
    'MX ANYWHERE 3-mouse-1.png',
    'MX ANYWHERE 3-mouse-2.png',
    'MX ANYWHERE 3-mouse-3.png',
    'MX ANYWHERE 3-mouse-4.png'
  ),
  (
    'Logitech F310 Wired Gamepad',
    30,
    '- Simple plug-and-play USB connection — works with Windows XP, Vista and 7
- Customizable with Profiler software (requires software installation)
- Broad game support—works with popular new titles and old favorites
- 10 programmable buttons, 8-way programmable D-pad
- NOTE: Refer the User Manual before use.',
    1,
    1,
    'F310-gamepad-1.png',
    'F310-gamepad-2.png',
    'F310-gamepad-3.png',
    'F310-gamepad-4.png'
  ),
  (
    'H340 USB COMPUTER HEADSET',
    21,
    '- USB Connectivity : No need to install software, simply connect the headphones via USB-A to your laptop or computer. System Requirements : Windows, macOS, or Chrome OS and popular calling platforms
- Flexible Microphone : Adjustable and easily positioned mic for best voice capture, Frequency response (Headset): 20 Hz - 20 KHz',
    5,
    1,
    'H340 USB COMPUTER HEADSE-headphone-1.png',
    'H340 USB COMPUTER HEADSE-headphone-2.png',
    'H340 USB COMPUTER HEADSE-headphone-3.png',
    'H340 USB COMPUTER HEADSE-headphone-4.png'
  ),
  (
    'VIGOR GK50 ELITE BOX WHITE',
    25,
    '- Superior Luxury Build: Brushed aluminum top plate with a durable bottom plate with integrated cable routing and completed with a gold-plated USB connector.
- 104 Keys + Octagonal Shaped Keycaps: Every single option at your disposal, from Print Screen, Page Down, F-Keys, and Setting Keys. Enjoy octagonal keycaps that provide ample space for your finger to rest on for the ultimate comfort.',
    4,
    2,
    'VIGOR GK50 ELITE BOX WHITE-keyboard-1.png',
    'VIGOR GK50 ELITE BOX WHITE-keyboard-2.png',
    'VIGOR GK50 ELITE BOX WHITE-keyboard-3.png',
    'VIGOR GK50 ELITE BOX WHITE-keyboard-4.png'
  ),
  (
    'MSI Clutch GM08 Gaming Mouse',
    20,
    '- Gold-plated USB connector with Gaming-grade Optical Sensor
- Adjustable Weight System
- Featuring side Anti-Slip grips
- Max Resoluton 4200DPI',
    2,
    2,
    'Clutch GM08-mouse-1.png',
    'Clutch GM08-mouse-2.png',
    'Clutch GM08-mouse-3.png',
    'Clutch GM08-mouse-4.png'
  ),
  (
    'FORCE GC30 V2',
    40,
    '- WIDE COMPARABILITY: Use your GC30 gamepad with all Windows 10/8.1/7 Computers / Laptops, Android Tablets / Phones and PlayStation 4.
- HIGH ACCURACY: With advanced analog sticks, the Force GC series controllers provide flawless smooth movement. Two different D-pad covers with magnetic design allows you to switch for your preferred game type.',
    1,
    2,
    'FORCE GC30 V2-gamepad-1.png',
    'FORCE GC30 V2-gamepad-2.png',
    'FORCE GC30 V2-gamepad-3.png',
    'FORCE GC30 V2-gamepad-4.png'
  ),
  (
    'Optix MAG272CQR',
    480,
    '- WQHD High Resolution - Game titles will even look better, displaying more details due to the WQHD resolution
- Night Vision: See every detail clearly in the dark, helping you find and attack enemies before they notice',
    3,
    2,
    'ptix MAG272CQR-screen-1.png',
    'ptix MAG272CQR-screen-2.jpeg',
    'ptix MAG272CQR-screen-3.png',
    'ptix MAG272CQR-screen-4.png'
  ),
  (
    'IMMERSE GH20',
    30,
    '- Ultra-lightweight For Only 245 Grams
- 2.5cm-thick Ear Cups Design For Glasses-user-friendly
- Quick Control with In-line Controller',
    5,
    2,
    'IMMERSE GH20-headphone-1.png',
    'IMMERSE GH20-headphone-2.png',
    'IMMERSE GH20-headphone-3.png',
    'IMMERSE GH20-headphone-4.png'
  ),
  (
    'Razer Blackwidow Lite Silent',
    87,
    '- Zero-Compromise Mechanical Switch for Speed & Accuracy: Razer Orange switch technology provides tactile feedback with a quieter click, requiring 45 G of actuation force; ideal for most gaming and typing experiences
- Fully Programmable Macro Support: Razer Hypershift allows for all keys and keypress combinations to be remapped to execute complex commands',
    4,
    5,
    'Razer Blackwidow Lite Silent-keyboard-1.png',
    'Razer Blackwidow Lite Silent-keyboard-2.png',
    'Razer Blackwidow Lite Silent-keyboard-3.png',
    'Razer Blackwidow Lite Silent-keyboard-4.png'
  ),
  (
    'Razer Basilisk Ultimate with Dock',
    120,
    '- 25% Faster Than Competing Wireless Mice: Razer HyperSpeed wireless technology brings together extreme low-latency and interference reduction for true wireless freedom
- 3x Quicker Than Traditional Mechanical Switches: Razer Optical mouse switches uses light beam-based actuation, registering button presses at the speed of light',
    2,
    5,
    'Razer Basilisk Ultimate with Dock-mouse-1.png',
    'Razer Basilisk Ultimate with Dock-mouse-2.png',
    'Razer Basilisk Ultimate with Dock-mouse-3.png',
    'Razer Basilisk Ultimate with Dock-mouse-4.png'
  ),
  (
    'Game Razer Raiju Ultimate',
    135,
    '- Razer mecha-tactile action buttons - soft cushioned touch with tactile feedback.
- 2.5cm-thick Ear Cups Design For Glasses-user-friendly
- Advanced App configuration to easily fine-tune control options.',
    1,
    5,
    'Game Razer Raiju Ultimate-gamepad-1.png',
    'Game Razer Raiju Ultimate-gamepad-2.png',
    'Game Razer Raiju Ultimate-gamepad-3.png',
    'Game Razer Raiju Ultimate-gamepad-4.png'
  ),
  (
    'Razer Raptor',
    620,
    '- 27” WQHD (2560x1440) IPS-Grade display for incredible detail and picture clarity
- Fast 144Hz refresh rate for a smooth and crisp image
- 95% DCI-P3 color Gamut and HDR400 support for a rich, vibrant spectrum of color
- Solid aluminum base with Razer Chroma RGB and built-in cable management – Display cables included',
    3,
    5,
    'Razer Raptor-screen-1.png',
    'Razer Raptor-screen-2.png',
    'Razer Raptor-screen-3.png',
    'Razer Raptor-screen-4.png'
  ),
  (
    'BlackShark V2 - Wired Gaming Headset',
    80,
    '- The #1 Best-Selling Gaming Peripherals Brand: Source - The NPD Group, Inc. U.S. Retail Tracking Service: Gaming Keyboards, Gaming Mice, Gaming Headsets, Gaming Peripherals; Based on dollar sales, Jan-Sept. 2021 combined
- Compatibility: Audio enhancer DAC connects via USB connector; THX Spatial Audio available on Windows 10 64-bit only',
    5,
    5,
    'BlackShark V2 - Wired Gaming Headset-headphone-1.png',
    'BlackShark V2 - Wired Gaming Headset-headphone-2.png',
    'BlackShark V2 - Wired Gaming Headset-headphone-3.png',
    'BlackShark V2 - Wired Gaming Headset-headphone-4.png'
  ),
  (
    'DualSense Cosmic Red',
    74,
    '- Bring gaming worlds to life - Feel your in-game actions and environment simulated through haptic feedback*. Experience varying force and tension at your fingertips with adaptive triggers*.
- A gaming icon in your hands - Enjoy a comfortable, evolved design with an iconic layout and enhanced sticks. Hear higher-fidelity** sound effects through the built-in speaker in supported games.',
    1,
    4,
    'DualSense Cosmic Red-gamepad-1.png',
    'DualSense Cosmic Red-gamepad-2.png',
    'DualSense Cosmic Red-gamepad-3.png',
    'DualSense Cosmic Red-gamepad-4.png'
  ),
  (
    'PlayStation PULSE 3D Wireless Headset',
    99,
    '- Built for a new generation - Fine-tuned for 3D Audio on PS5 consoles. Enjoy comfortable gaming with refined earpads and headband strap. Play in style with a sleek design that complements the PS5 console. Available when feature is supported by game.
- Designed for gamers - Chat with friends through the hidden noise-cancelling microphones. Quickly adjust audio and chat settings with easy-access controls. Internet and account for PlayStation Network required.',
    5,
    4,
    'PlayStation PULSE 3D Wireless Headset-headphone-1.png',
    'PlayStation PULSE 3D Wireless Headset-headphone-2.png',
    'PlayStation PULSE 3D Wireless Headset-headphone-3.png',
    'PlayStation PULSE 3D Wireless Headset-headphone-4.png'
  ),
  (
    'TUF Gaming K3',
    90,
    '- MECHANICAL GAMING KEYBOARD - ASUS TUF K3 features heavy-duty & highly-durable mechanical switches (customizable Blue, Brown or Red switches) with a lifespan of 50-million keystrokes for responsive & reliable performance during intense gaming sessions
- ANTI-GHOSTING - With N-Key rollover response, onboard memory, 8 fully-programmable keys with on-the fly macro keyboard recordings for uninterrupted video games – it’s got it all!',
    4,
    3,
    'TUF Gaming K3-keyboard-1.png',
    'TUF Gaming K3-keyboard-2.png',
    'TUF Gaming K3-keyboard-3.png',
    'TUF Gaming K3-keyboard-4.png'
  ),
  (
    'ROG Gladius III Wireless',
    116,
    '- PRECISE CONTROL - Get ready to lock your target and embrace victory with the ROG Gladius II Wireless optical gaming mouse with dual wireless connectivity (2.4GHz/Bluetooth). Gladius II Wireless has an advanced 16000-dpi optical sensor for fast response and precise control, ergonomic right-handed design to ensure you stay comfortable during extended gaming sessions and Aura Sync lighting technology to outshine the competition.',
    2,
    3,
    'ROG Gladius III Wireless-mouse-1.png',
    'ROG Gladius III Wireless-mouse-2.png',
    'ROG Gladius III Wireless-mouse-3.png',
    'ROG Gladius III Wireless-mouse-4.png'
  ),
  (
    'ASUS TV500BG Gamepad Wireless',
    60,
    '- Gamepad for both Android Lollipop and Windows operating systems
- Engineered for accurate control in Android TV and PC games
- Android TV brings stunning life-like 3D visuals to your HDTV.
- Play with friends or makes new ones with Google Play Games.
- Track your progress and earn achievements across your Android phone, tablet, and TV.',
    1,
    3,
    'ASUS TV500BG Gamepad Wireless-gamepad-1.png',
    'ASUS TV500BG Gamepad Wireless-gamepad-2.png',
    'ASUS TV500BG Gamepad Wireless-gamepad-3.png',
    'ASUS TV500BG Gamepad Wireless-gamepad-4.png'
  ),
  (
    'ROG STRIX XG27VQ',
    1000,
    '- 27 inches Full HD (1920 x 1080) 1800R curved gaming monitor with ASUS Eye Care technology
- 144 Hertz refresh rate and AMD Free Sync technology (48~144 Hertz) with Low Framerate Compensation (LFC) for immersive, smooth gaming with Display Port, HDMI and DVI connectivity
- Marathon ready with swivel, tilt and height adjustability (0~100 milli meter) and VESA mount so you can always find your ideal viewing position',
    3,
    3,
    'ROG STRIX XG27VQ-screen-1.png',
    'ROG STRIX XG27VQ-screen-2.png',
    'ROG STRIX XG27VQ-screen-3.png',
    'ROG STRIX XG27VQ-screen-4.png'
  ),
  (
    'ROG Strix Go 2.4',
    162,
    '- CLEAR HEADSET MIC – Certified by Discord and TeamSpeak, the ROG Strix GO 2.4 is a pro gamers must have. Detachable unidirectional boom microphone is finely tuned for team communication. Right earcup includes built-in mic for quick use without boom
- HI-RES HEADPHONE AUDIO – Exclusive ASUS Essence driver and airtight-chamber design, the ROG Strix GO 2.4 wireless headset keeps you in the moment & blocks outside distractions. 40mm Essence drivers deliver rich & pure sound with optimized deep bass',
    5,
    3,
    'ROG Strix Go 2.4-headphone-1.png',
    'ROG Strix Go 2.4-headphone-2.png',
    'ROG Strix Go 2.4-headphone-3.png',
    'ROG Strix Go 2.4-headphone-4.png'
  ),
  (
    'MULTI-DEVICE BLUETOOTH KEYBOARD K380',
    44,
    '- WORK FROM ANYWHERE: This slim Bluetooth keyboard for Mac works with your MacBook, iPad, or iPhone -with a lightweight, minimalist iOS layout that lets you multitask at home or on the go
- COMFORTABLE LAPTOP-STYLE TYPING: The compact keyboard footprint allows for less arm reaching and better body posture. Scooped, low-profile scissor keys offer a fluid, quiet, familiar laptop-like typing',
    4,
    1,
    'MULTI-DEVICE BLUETOOTH KEYBOARD K380-keyboard-1.png',
    'MULTI-DEVICE BLUETOOTH KEYBOARD K380-keyboard-2.png',
    'MULTI-DEVICE BLUETOOTH KEYBOARD K380-keyboard-3.png',
    'MULTI-DEVICE BLUETOOTH KEYBOARD K380-keyboard-4.png'
  ),
  (
    'LOGITECH PEBBLE WIRELESS MOUSE M350',
    34,
    '- Modern, slim and beautiful pebble shape - Logitech pebble has stand-out simplicity with a design that is nice to hold, feels great in your hand and is easy to carry around.
- Silent clicks and ultra-quiet scrolling - enjoy the same click feel with over 90% noise reduction on the click sound.',
    2,
    1,
    'LOGITECH PEBBLE WIRELESS MOUSE M350-mouse-1.png',
    'LOGITECH PEBBLE WIRELESS MOUSE M350-mouse-2.png',
    'LOGITECH PEBBLE WIRELESS MOUSE M350-mouse-3.png',
    'LOGITECH PEBBLE WIRELESS MOUSE M350-mouse-4.png'
  ),
  (
    'Logitech Driving Force Shifter',
    60,
    '- The sim racing shifter for G29 and G920 Driving Force Racing Wheels: Adds realistic shifting to your racing rig
- Built to last: Durable solid steel gear shifter and hand stitched leather boot and knob cover and six speeds with push down reverse gear
- Compatible with PlayStation 4, Xbox One, Windows 8.1, Windows 8, or Windows 7, games that support Logitech force feedback racing wheel',
    1,
    1,
    'Logitech Driving Force Shifter-gamepad-1.png',
    'Logitech Driving Force Shifter-gamepad-2.png',
    'Logitech Driving Force Shifter-gamepad-3.png',
    'Logitech Driving Force Shifter-gamepad-4.png'
  ),
  (
    'H390 USB COMPUTER HEADSET',
    28,
    '- Optimum Comfort: PC headphones with plush, padded headband and earcups
- Enhanced Audio: Experience premium sound quality; system requirements: Windows Vista, Windows 7, Windows 8, Windows 10 or later, Chrome OS USB port, MAC OS X (10.2.8 or later) USB port',
    5,
    1,
    'H390 USB COMPUTER HEADSET-headphone-1.png',
    'H390 USB COMPUTER HEADSET-headphone-2.png',
    'H390 USB COMPUTER HEADSET-headphone-3.png',
    'H390 USB COMPUTER HEADSET-headphone-4.png'
  ),
  (
    'VIGOR GK20',
    25,
    '- Rainbow Lighting Effect
- Water Repellent
- Connectivity Technology: Wired
- Item package weight: 2.77 pounds.',
    4,
    2,
    'VIGOR GK20-keyboard-1.png',
    'VIGOR GK20-keyboard-2.png',
    'VIGOR GK20-keyboard-3.png',
    'VIGOR GK20-keyboard-4.png'
  ),
  (
    'CLUTCH GM40 WHITE',
    70,
    '- Unmatched ambidextrous ergonomics
- Convenient Side button Switch
- Quick DPI adjustment
- Integrated Anti-Slip side grips',
    2,
    2,
    'CLUTCH GM40 WHITE-mouse-1.png',
    'CLUTCH GM40 WHITE-mouse-2.png',
    'CLUTCH GM40 WHITE-mouse-3.png',
    'CLUTCH GM40 WHITE-mouse-4.png'
  ),
  (
    'FORCE GC30 V2 WHITE',
    40,
    '- WIDE COMPARABILITY: Use your GC30 gamepad with all Windows 10/8.1/7 Computers / Laptops, Android Tablets / Phones and PlayStation 4.
- DUAL MODES TO CONNECT: The Force GC30 provides both wireless and wired functionality to connect with your devices. You can switch seamlessly between wired and wireless usage so you can keep on gaming uninterrupted.',
    1,
    2,
    'FORCE GC30 V2 WHITE-mouse-1.png',
    'FORCE GC30 V2 WHITE-mouse-2.png',
    'FORCE GC30 V2 WHITE-mouse-3.png',
    'FORCE GC30 V2 WHITE-mouse-4.png'
  ),
  (
    'Optix G273QF',
    300,
    '- Rapid IPS – Provides 1ms GTG fast response time, optimizes screen colors and brightness 
- WQHD High Resolution – Games will look even better, displaying more details
- 165Hz Refresh Rate – Respond faster with smoother frames',
    3,
    2,
    'Optix G273QF-screen-1.png',
    'Optix G273QF-screen-2.png',
    'Optix G273QF-screen-3.png',
    'Optix G273QF-screen-4.png'
  ),
  (
    'IMMERSE GH50',
    50,
    '- 2 x 40mm neodymium drivers with virtual 7.1 surround sound and vibration system
- Rgb Mystic Light with millions of colors and various effects
- Sturdy metal construction and foldable headband design',
    5,
    2,
    'IMMERSE GH50-headphone-1.png',
    'IMMERSE GH50-headphone-2.png',
    'IMMERSE GH50-headphone-3.png',
    'IMMERSE GH50-headphone-4.png'
  ),
  (
    'Razer BlackWidow Tournament',
    110,
    '- Multi-Award winning Razer Mechanical Switches - Razer Green Switch Clicky keys with optimized tactile feel
- Extreme Durability- Razer mechanical switches are rated up to 80 million keystrokes and come with a 2-year warranty',
    4,
    5,
    'Razer BlackWidow Tournament Edition Chroma V2 Quartz Edition-keyboard-1.png',
    'Razer BlackWidow Tournament Edition Chroma V2 Quartz Edition-keyboard-2.png',
    'Razer BlackWidow Tournament Edition Chroma V2 Quartz Edition-keyboard-3.png',
    'Razer BlackWidow Tournament Edition Chroma V2 Quartz Edition-keyboard-4.png'
  ),
  (
    'Razer DeathAdder Essential Ergonomic',
    38,
    '- The #1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc. U.S. Retail Tracking Service, Keyboards, Mice, PC Headset/Pc Microphone, Gaming Designed, based on dollar sales, 2017-2021
- High-Precision 6,400 DPI Optical Sensor: Offers on-the-fly sensitivity adjustment through dedicated DPI buttons (reprogrammable) for gaming and creative work',
    2,
    5,
    'Razer DeathAdder Essential Ergonomic-mouse-1.png',
    'Razer DeathAdder Essential Ergonomic-mouse-2.png',
    'Razer DeathAdder Essential Ergonomic-mouse-3.png',
    'Razer DeathAdder Essential Ergonomic-mouse-4.png'
  ),
  (
    'Gamepad Razer Junglecat Dual-sided',
    100,
    '- Portable dual-sided controller for enhanced mobile gaming precision
- Modular design for total flexibility and personalization. Thumbstick Sensitivty Adjustment
- Razer Gamepad app for integrated game support and custom button mapping',
    1,
    5,
    'Gamepad_Razer_Junglecat_Dual-sided-gamepad-1.png',
    'Gamepad_Razer_Junglecat_Dual-sided-gamepad-2.png',
    'Gamepad_Razer_Junglecat_Dual-sided-gamepad-3.png',
    'Gamepad_Razer_Junglecat_Dual-sided-gamepad-4.png'
  ),
  (
    'Razer Kraken X for Console',
    45,
    '- Immersive, 7.1 Surround Sound for Positional Audio: Outfitted with custom-tuned 40 millimeter drivers, capable of software-enabled surround sound when used for PC gaming only
- Durable Construction: The Kraken X frame is flexible and built to last, able to withstand daily, care-free use',
    5,
    5,
    'Razer Kraken X for Console-headphone-1.png',
    'Razer Kraken X for Console-headphone-2.png',
    'Razer Kraken X for Console-headphone-3.png',
    'Razer Kraken X for Console-headphone-4.png'
  ),
  (
    'PS4 DUALSHOCK 4 Wireless Controller Red',
    65,
    '- The feel, shape, and sensitivity of the dual analog sticks and trigger buttons have been improved to provide a greater sense of control, no matter what you play
- The new multi touch and clickable touch pad on the face of the DualShock 4 Wireless Controller opens up worlds of new gameplay possibilities for both newcomers and veteran gamers',
    1,
    4,
    'Sony PS4 DUALSHOCK 4 Wireless Controller Red-gamepad-1.png',
    'Sony PS4 DUALSHOCK 4 Wireless Controller Red-gamepad-2.png',
    'Sony PS4 DUALSHOCK 4 Wireless Controller Red-gamepad-3.png',
    'Sony PS4 DUALSHOCK 4 Wireless Controller Red-gamepad-4.png'
  ),
  (
    'Sony MDRZX310APB',
    20,
    '- Integrated microphone
- Powerful 30mm dome type driver units for clear sound
- Lightweight & adjustable housing for rugged durability',
    5,
    4,
    'Sony MDRZX310APB-headphone-1.png',
    'Sony MDRZX310APB-headphone-2.png',
    'Sony MDRZX310APB-headphone-3.png',
    'Sony MDRZX310APB-headphone-4.png'
  ),

  ALTER TABLE products ADD `popular_status` int(11) NOT NULL
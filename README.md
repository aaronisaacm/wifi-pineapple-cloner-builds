# Universal Wifi pineapple hardware cloner: Builds

For a long time I have noticed that there are people stealing the authorship of this project that started in 2018.
Also there is people who go further and are selling the devices ready to use...

So to prevent anyone from being scammed paying for something that is public and free, I decided to make a second repo with the builds already generated.
Maybe some routers need a little more work as is the case of the GL-AR150 where [this script](https://github.com/xchwarze/wifi-pineapple-cloner/blob/master/fixs/nano/02-network-ar150-fix) does the magic.
The idea is to invite the community to collaborate with these extra scripts, they can be sent as pull requests from the [original project](https://github.com/xchwarze/wifi-pineapple-cloner).


## Hardware info

As the tetra is intended to be used on hardware with 32MB of flash it is recommended to use it with a pendrive.
The steps for this would be:
1. The pendrive has to be formatted from the pineapple panel
2. Connect the pinneaple to the internet and restart it
3. When pineapple starts it will run the [20-sd-tetra-fix script](https://github.com/xchwarze/wifi-pineapple-cloner/blob/master/fixs/tetra/20-sd-tetra-fix) and install the missing packages on the pendrive


It could also be done by hand by running this command:
```
opkg update && opkg --dest sd install python-logging python-openssl python-sqlite3 python-codecs && python -m compileall
```

However this is completely optional because pineapple will work fine without those packages.
Although we would need the pendrive to be able to install the modules...!


## Supported devices

Brand       | Device         | CPU (MHZ)         | Flash MB| RAM MB | More info|
-------------|-------------| -----------| -----------| -----------| -----------|
HAK5  | Pineapple Tetra | 580 |32 + 2GB eMMC|64|https://openwrt.org/toh/hwdata/hak5/hak5_wifi_pineapple_mark_7
Buffalo  | WZR450HP2 | 400 |32|64|https://openwrt.org/toh/buffalo/wzr-450hp2
Buffalo  | WZR600DHP | 680 |32|128|https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-600dhp
Buffalo  | WZRHPAG300H | 680 |32|128|https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-ag300h_v1
Buffalo  | WZRHPG300NH | 400 |32|64|https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-g300nh_v1
Buffalo  | WZRHPG300NH2 | 400 |32|64|https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-g300nh2_v2
Buffalo  | WZRHPG450H | 400 |32|64|https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-g450h_v1
D-Link   | DGL5500A1 | 720 |16|128|https://openwrt.org/toh/hwdata/d-link/d-link_dgl-5500_a1
D-Link   | DIR835A1 | 560 |16|128|https://openwrt.org/toh/d-link/dir-835_a1
D-Link   | dir-869-a1 | 750 |16|64|https://openwrt.org/toh/hwdata/d-link/d-link_dir-869_a1
GL.iNet  | gl-ar300 | 560 |16|128|https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar300
GL.iNet  | gl-ar300m | 650 |16|128|https://openwrt.org/toh/gl.inet/gl-ar300m
GL.iNet  | gl-ar750 | 650 |16|128|https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar750
GL.iNet  | gl-ar750s | 775 |16|128|https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar750s
TP-Link  | archer-c7-v2 | 720 |16|128|https://openwrt.org/toh/hwdata/tp-link/tp-link_archer_c7_ac1750_v2.0
TP-Link  | archer-c7-v4 | 775 |16|128|https://openwrt.org/toh/hwdata/tp-link/tp-link_archer_c7_v4
TP-Link  | archer-c7-v5 | 750 |16|128|https://openwrt.org/toh/hwdata/tp-link/tp-link_archer_c7_v5
<br>


## Recomended setup
1. GL-AR150 https://www.gl-inet.com/products/gl-ar150/ or TPLink Archer C7
2. USB 2.0 2 ports hub https://www.ebay.co.uk/itm/USB-2-0-2-Dual-Port-Hub-For-Laptop-Macbook-Notebook-PC-Mouse-Flash-Disk/273070654192
2. Generic RT5370 adapter
3. Please support Hak5 work and buy the original hardware


## If you want to collaborate with hardware 
To develop the next versions of this project I need:

For TETRA clone project:
https://www.gl-inet.com/products/gl-ar750s/#specs

For "WiFi Pineapple Mark 6.5" project:
https://www.gl-inet.com/products/gl-mt1300/#specs

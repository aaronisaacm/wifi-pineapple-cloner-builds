# Universal Wifi pineapple hardware cloner: Builds

For a long time I have noticed that there are people stealing the authorship of this project that started in 2018.<br>
Also there is people who go further and are selling the devices ready to use...<br>

So to prevent anyone from being scammed paying for something that is public and free, I decided to make a second repo with the builds already generated.<br>
Maybe some routers need a little more work as is the case of the GL-AR150 where [this script](https://github.com/xchwarze/wifi-pineapple-cloner/blob/master/fixs/nano/02-network-ar150-fix) does the magic.<br>
The idea is to invite the community to collaborate with these extra scripts, they can be sent as pull requests from the [original project](https://github.com/xchwarze/wifi-pineapple-cloner).


## Hardware info

As the tetra is intended to be used on hardware with 32MB of flash it is recommended to use it with a pendrive.
The steps for this would be:
1. The pendrive has to be formatted from the pineapple panel `Advanced > USB & Storage > Format SD Card`
2. Connect the pinneaple to the internet and restart it
3. When pineapple starts it will run the [20-sd-tetra-fix script](https://github.com/xchwarze/wifi-pineapple-cloner/blob/master/fixs/tetra/20-sd-tetra-fix) and install the missing packages on the pendrive


It could also be done by hand by running this command:
```bash
opkg update && opkg --dest sd install python-logging python-openssl python-sqlite3 python-codecs && python -m compileall
```

However this is completely optional because pineapple will work fine without those packages.
Although we would need the pendrive to be able to install the modules...!


## Supported devices

Pineapple NANO compatible hardware.
This is a uncomplete list!

Brand       | Device         | CPU (MHZ)         | Flash MB| RAM MB | More info | Download build |
-------------|-------------| -----------| -----------| -----------| -----------| -----------|
Buffalo  | WZR-450HP2 | 400 | 32 | 64 | [docs link](https://openwrt.org/toh/buffalo/wzr-450hp2) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/nano-releases/wzr-450hp2-nano-sysupgrade.bin)
Buffalo  | WZR-HP-G300NH v1 | 400 | 32 | 64 | [docs link](https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-g300nh_v1) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/nano-releases/wzr-hp-g300nh-nano-sysupgrade.bin)
Buffalo  | WZR-HP-G450H v1 | 400 | 32 | 64 | [docs link](https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-g450h_v1) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/nano-releases/wzr-hp-g450h-nano-sysupgrade.bin)
GL.iNet  | GL-AR150 | 400 | 16 | 64 | [docs link](https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar150) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/nano-releases/gl-ar150-nano-sysupgrade.bin)
GL.iNet  | GL-AR300 v3 | 560 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar300) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/nano-releases/gl-ar300-nano-sysupgrade.bin)
GL.iNet  | GL-AR300M | 650 | 16 | 128 | [docs link](https://openwrt.org/toh/gl.inet/gl-ar300m) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/nano-releases/gl-ar300m-nano-sysupgrade.bin)
<br>


Pineapple TETRA compatible hardware.
This is a uncomplete list!

Brand       | Device         | CPU (MHZ)         | Flash MB| RAM MB | More info | Download build |
-------------|-------------| -----------| -----------| -----------| -----------| -----------|
Buffalo  | WZR-600DHP | 680 | 32 | 128 | [docs link](https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-600dhp) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/wzr-600dhp-tetra-sysupgrade.bin)
Buffalo  | WZR-HP-AG300H v1 | 680 | 32 | 128 | [docs link](https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-ag300h_v1) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/wzr-hp-ag300h-tetra-sysupgrade.bin)
Buffalo  | WZR-HP-G300NH2 | 400 | 32 | 64 | [docs link](https://openwrt.org/toh/hwdata/buffalo/buffalo_wzr-hp-g300nh2_v2) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/wzr-hp-g300nh2-tetra-sysupgrade.bin)
D-Link   | DGL-5500 A1 | 720 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/d-link/d-link_dgl-5500_a1) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/dgl-5500-a1-tetra-sysupgrade.bin)
D-Link   | DIR-835 A1 | 560 | 16 | 128 | [docs link](https://openwrt.org/toh/d-link/dir-835_a1) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/dir-835-a1-tetra-sysupgrade.bin)
D-Link   | DIR-869 A1 | 750 | 16 | 64 | [docs link](https://openwrt.org/toh/hwdata/d-link/d-link_dir-869_a1) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/dir-869-a1-tetra-sysupgrade.bin)
GL.iNet  | GL-AR750 | 650 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar750) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/gl-ar750-tetra-sysupgrade.bin)
GL.iNet  | GL-AR750S v1 | 775 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/gl.inet/gl.inet_gl-ar750s) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/gl-ar750s-tetra-sysupgrade.bin)
TP-Link  | Archer C7 v2 | 720 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/tp-link/tp-link_archer_c7_ac1750_v2.0) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/archer-c7-v2-tetra-sysupgrade.bin)
TP-Link  | Archer C7 v4 | 775 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/tp-link/tp-link_archer_c7_v4) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/archer-c7-v4-tetra-sysupgrade.bin)
TP-Link  | Archer C7 v5 | 750 | 16 | 128 | [docs link](https://openwrt.org/toh/hwdata/tp-link/tp-link_archer_c7_v5) | [lastest version](https://github.com/xchwarze/wifi-pineapple-cloner-builds/blob/main/tetra-releases/archer-c7-v5-tetra-sysupgrade.bin)
<br>


## If you want to collaborate with hardware 
To develop the next versions of this project I need:

For TETRA clone project:
https://www.gl-inet.com/products/gl-ar750s/#specs

For "WiFi Pineapple Mark 6.5" project:
https://www.gl-inet.com/products/gl-mt1300/#specs

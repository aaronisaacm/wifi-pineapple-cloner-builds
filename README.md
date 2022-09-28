# Universal Wifi pineapple hardware cloner: Builds

For a long time I have noticed that there are people stealing the authorship of this project that started in 2018.<br>
Also there is people who go further and are selling the devices ready to use...<br>

So to prevent anyone from being scammed paying for something that is public and free, I decided to make a second repo with the builds already generated.<br>
Maybe some routers need a little more work as is the case of the GL-AR150 where [this script](https://github.com/xchwarze/wifi-pineapple-cloner/blob/master/fixs/nano/02-network-ar150-fix) does the magic.<br>
The idea is to invite the community to collaborate with these extra scripts, they can be sent as pull requests from the [original project](https://github.com/xchwarze/wifi-pineapple-cloner).


## Issues and Pull Request

All this will be handled in the [original project](https://github.com/xchwarze/wifi-pineapple-cloner).


## Supported devices

All builds are made with:
* OpenWrt 19.07.7
* Universal Wifi pineapple hardware cloner (WPC) v2 
* The config used to build was the "universal" (flavor: universal). This is designed to be able to mount a TETRA on any hardware.
<br>

Remember that...
* If you are going to use this on hardware with a single wifi board you have to add a second.
* If your hardware has less than 32 megabytes of space you have to use a pendrive
<br>

I will only build releases for these manufacturers:
```
ALFA Network
ASUS
Buffalo
D-Link
GL.iNet
Linksys
NETGEAR
TP-Link
Xiaomi
ZBT
ZyXEL
```

If your manufacturer or model is not built you have to follow the steps of the Universal Wifi pineapple hardware cloner [documentation](https://github.com/xchwarze/wifi-pineapple-cloner).

## Recomended setup
1. [GL-AR150](https://www.gl-inet.com/products/gl-ar150/) or [TPLink Archer C7](https://www.tp-link.com/en/home-networking/wifi-router/archer-c7/)
2. USB 2.0 [2 ports hub](https://www.ebay.com/itm/144520475350)
2. Generic [RT5370 WIFI adapter](https://www.ebay.com/itm/284904442887) **you're really going to need this on hardware that doesn't have two wifis to use**
3. Please support Hak5 work and buy the original hardware and the new!


## If you want to collaborate with hardware 
To develop the next versions of this project I need:

For TETRA clone project:
https://www.gl-inet.com/products/gl-ar750s/#specs

For "WiFi Pineapple Mark 6.5" project:
https://www.gl-inet.com/products/gl-mt1300/#specs

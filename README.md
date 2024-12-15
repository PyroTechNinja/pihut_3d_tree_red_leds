# pihut_3d_tree_red_leds
Code for the piHuts 3D Christmas tree with red LEDs, includes a web interface

Based on the code from the piHut website and from p10tyr 
https://thepihut.com/products/3d-xmas-tree-for-raspberry-pi?variant=38284925265
https://github.com/p10tyr/thepihut3dxmastree-examples

I'm doing it on a Pi3B but should work on just about all of them

## Get the tree the right way round!!!
As it says on the piHut webside, use caution when installing the tree on the pi, or it could end badly for you pi.<br>
The resisters should be facing into the board.

## Install guide

1. Run this to update your pi and install the needed additional python bits
```bash
sudo apt update
sudo apt upgrade

sudo apt-get install python3-gpiozero
```
2. Copy this repo into your pi `git clone https://github.com/PyroTechNinja/pihut_3d_tree_red_leds.git`
3. Change to the folder you put it in `cd pihut_3d_tree_red_leds`
4. `sudo cp -r webpages/ /var/www/html`
5. Edit the $filepath to your python files location in change.php `sudo nano /var/http/www/change.php`

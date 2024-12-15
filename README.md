# pihut_3d_tree_red_leds
Code for the piHuts 3D Christmas tree with red LEDs, includes a web interface

Based on the code from the piHut website and from p10tyr 
https://thepihut.com/products/3d-xmas-tree-for-raspberry-pi?variant=38284925265
https://github.com/p10tyr/thepihut3dxmastree-examples

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
2. Copy this repo into your pi how ever you like
3. Change to the folder you put it in
4. 'sudo cp webpages /var/www/html'
5. 

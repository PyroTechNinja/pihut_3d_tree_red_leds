from gpiozero import LEDBoard
from time import sleep

# Tree light labels and pin mapping
treelights = [18, 5, 9, 11, 21, 10, 7, 12, 6, 1, 14,
              3, 20, 24, 13, 15, 2, 17, 16, 23, 8, 22, 4, 19]
treemap = {1: 4, 7: 5, 16: 6, 22: 7, 6: 8, 14: 9, 8: 10, 21: 11, 15: 12, 3: 13, 19: 14, 2: 15,
           9: 16, 10: 17, 20: 18, 18: 19, 17: 20, 4: 21, 24: 22, 23: 23, 13: 24, 5: 25, 12: 26, 11: 27}

# Initialize the LEDs
leds = LEDBoard(*list(range(4, 28)), pwm=True)


def label_to_pin(label):
    """Convert a tree light label to a GPIO pin."""
    return treemap[label]


def to_board_index(label):
    """Convert a tree light label to an LEDBoard index."""
    return label_to_pin(label) - 4


# Main loop to cascade lights with fade
while True:
    # Fade lights on in a cascading pattern
    for label in treelights:
        led_index = to_board_index(label)
        leds[led_index].pulse(fade_in_time=0.5, fade_out_time=0.5, n=1)  # Pulse once
        sleep(0.2)  # Delay before the next light starts

    # Small pause after completing one cascade cycle
    sleep(1)

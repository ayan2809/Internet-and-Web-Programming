# generate a python script to generate power and voltage with timestamp of a lift


import sys
import os
import time
import datetime
import random
import csv
import numpy as np
import matplotlib.pyplot as plt
import matplotlib.dates as mdates
import matplotlib.ticker as ticker
from matplotlib.ticker import FormatStrFormatter


# define the function to generate power and voltage

def voltage():
    voltage = random.uniform(0.5, 1.5)
    return voltage

def current():
    current = random.uniform(0.5, 1.5)
    return current

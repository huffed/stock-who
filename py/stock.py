# Raw Package
import numpy as np
import pandas as pd
import sys

# Data Source
import yfinance as yf
from tickers import tickers

# Data visualiser
import plotly.graph_objs as go

# Calling data
data = yf.download(tickers=tickers,period="3d",interval="1h")

# Print data
print(data)

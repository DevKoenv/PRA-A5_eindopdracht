import pandas as pd
from datetime import datetime, timedelta

data = pd.read_csv('data.csv')

def data1():
    violationsSum = data['overtredingen'].sum()

    return violationsSum


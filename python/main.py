import pandas as pd

data = pd.read_csv('data.csv')

def data1():
    violationsSum = data['overtredingen'].sum()

    return violationsSum


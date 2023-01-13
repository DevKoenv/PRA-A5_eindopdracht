import pandas as pd

data = pd.read_csv('data.csv')

def totalViolations():
    totalViolations = data['overtredingen'].sum()

    return totalViolations


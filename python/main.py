import pandas as pd
from datetime import datetime, timedelta

data = pd.read_csv('data.csv')

def data1():
    violationsSum = data['overtredingen'].sum()

    return violationsSum

def data4():
    dateFilter = (data['datum'] >= (datetime.today() - timedelta(days=21)).strftime('%d/%m/%Y'))
    violationsFilter = (data['overtredingen'] <= 1)

    filteredData = data[violationsFilter & dateFilter]

    return filteredData[['datum', 'team1', 'team2', 'uitslag', 'scheidsrechter']].to_string(index=False)
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


with open('totaleOvertredingen.txt', 'w') as f:
    f.write(f'{data1()}')
    f.close()

with open('gemiddeldeOvertredingen.txt', 'w') as f:
    f.write(f'{data2()}')
    f.close()

with open('zwartboek.txt', 'w') as f:
    f.write(f'{data3()}')
    f.close()

with open('eregalerij.txt', 'w') as f:
    f.write(f'{data4()}')
    f.close()
import pandas as pd
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import json
import sys
import os

def predict_disease(input_gejala):

    # URL dari spreadsheet Google
    # url_spreadsheet_google = 'https://docs.google.com/spreadsheets/d/1fZYAM0fHJelQb9Blfwuwc9tPAWtPCFytFVN7XuWxykw/edit#gid=0'

    # Membaca data dari spreadsheet menggunakan pandas
    data = pd.read_csv(os.path.abspath('python_scripts/data_penyakit.csv'))
    X = data.drop('penyakit', axis=1)
    y = data['penyakit']

    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
    model = DecisionTreeClassifier()
    model.fit(X_train, y_train)
    y_pred = model.predict(X_test)
    accuracy = accuracy_score(y_test, y_pred)

    gejala_columns = X.columns
    gejala_values = {gejala: 0 for gejala in gejala_columns}

    for gejala in input_gejala:
        cleaned_gejala = gejala.strip().lower()
        if cleaned_gejala in gejala_values:
            gejala_values[cleaned_gejala] = 1

    input_gejala_df = pd.DataFrame([gejala_values])

    prediksi = model.predict(input_gejala_df)

    result =  {
        "akurasi" : accuracy,
        "hasil_prediksi": prediksi[0]
    }

    result_json = json.dumps(result)
    return result_json

received_data = sys.argv[1]
gejala_list = received_data.split(',')

if all(gejala.strip() for gejala in gejala_list):
    try:
        hasil_prediksi = predict_disease(gejala_list)
        print(hasil_prediksi)
    except Exception as e:
        print("Error:", str(e))
else:
    print("Error: Invalid input gejala")



from flask import Flask, jsonify, request
import your_chosen_library as ml

app = Flask(name)

# load the trained model
model = ml.load_model('model.h5')

@app.route('/predict', methods=['POST'])
def predict():
    # get the input data from the request
    input_data = request.json

    # use the model to make a prediction
    prediction = model.predict(input_data)

    # return the prediction as a JSON response
    return jsonify({'prediction': prediction})

if name == 'main':
    app.run(debug=True)
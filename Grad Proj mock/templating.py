from flask import Flask, render_template, request, redirect, url_for
from datetime import datetime

app = Flask(__name__)

# Dummy data for accommodations
accommodations = [
    {'id': 1, 'name': 'Hotel A', 'type': 'Hotel', 'location': 'New York', 'price': 100},
    {'id': 2, 'name': 'Dorm B', 'type': 'Dorm', 'location': 'Los Angeles', 'price': 50},
    {'id': 3, 'name': 'Apartment C', 'type': 'Apartment', 'location': 'Chicago', 'price': 75},
    {'id': 4, 'name': 'Private Room D', 'type': 'Private Room', 'location': 'Houston', 'price': 30},
]

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/accommodation/<int:id>')
def accommodation(id):
    accommodation = next((a for a in accommodations if a['id'] == id), None)
    if accommodation:
        return render_template('accommodation.html', accommodation=accommodation)
    else:
        return redirect(url_for('index'))

@app.route('/book/<int:id>', methods=['GET', 'POST'])
def book(id):
    accommodation = next((a for a in accommodations if a['id'] == id), None)
    if request.method == 'POST':
        checkin = datetime.strptime(request.form['checkin'], '%Y-%m-%d').date()
        checkout = datetime.strptime(request.form['checkout'], '%Y-%m-%d').date()
        guests = request.form['guests']
        # TODO: Add booking logic
        return redirect(url_for('confirmation', id=id, checkin=checkin, checkout=checkout, guests=guests))
    else:
        if accommodation:
            return render_template('book.html', accommodation=accommodation)
        else:
            return redirect(url_for('index'))

@app.route('/confirmation/<int:id>/<checkin>/<checkout>/<int:guests>')
def confirmation(id, checkin, checkout, guests):
    accommodation = next((a for a in accommodations if a['id'] == id), None)
    if accommodation:
        return render_template('confirmation.html', accommodation=accommodation, checkin=checkin, checkout=checkout, guests=guests)
    else:
        return redirect(url_for('index'))

@app.route('/add-accommodation', methods=['GET', 'POST'])
def add_accommodation():
    if request.method == 'POST':
        name = request.form['name']
        type = request.form['type']
        location = request.form['location']
        price = request.form['price']
        id = max(accommodations, key=lambda x: x['id'])['id'] + 1
        accommodations.append({'id': id, 'name': name, 'type': type, 'location': location, 'price': price})
        return redirect(url_for('index'))
    else:
        return render_template('add_accommodation.html')

@app.route('/delete-accommodation/<int:id>')
def delete_accommodation(id):
    accommodation = next((a for a in accommodations if a['id'] == id), None)
    if accommodation:
        accommodations.remove(accommodation)
    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)

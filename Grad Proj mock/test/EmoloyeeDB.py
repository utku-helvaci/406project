import sqlite3  

    @app.route("/")
    def index():
        return render_template("index.html");
  
con = sqlite3.connect("employee.db")  
print("Database opened successfully")  
  
con.execute("create table Employees (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL, email TEXT UNIQUE NOT NULL, address TEXT NOT NULL)")  
  
print("Table created successfully")  
  
con.close() 

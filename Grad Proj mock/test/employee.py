import sqlite3  

  
con = sqlite3.connect("employee.db")  
print("Database opened successfully")  
  
con.execute("create table Employees (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL, email TEXT UNIQUE NOT NULL, address TEXT NOT NULL)")  
  
print("Table created successfully")  
  
con.close() 


    @app.route("/")
    def index():
        return render_template("index.html");

    @app.route("/savedetails",methods = ["POST","GET"])
    def saveDetails():
        msg = "msg"
        if request.method == "POST":
            try:
                name = request.form["name"]
                email = request.form["email"]
                address = request.form["address"]
                with sqlite3.connect("employee.db") as con:
                    cur = con.cursor()
                    cur.execute("INSERT into Employees (name, email, address) values (?,?,?)",(name,email,address))
                    con.commit()
                    msg = "Employee successfully Added"
            except:
                con.rollback()
                msg = "We can not add the employee to the list"
            finally:
                return render_template("success.html",msg = msg)
                con.close()

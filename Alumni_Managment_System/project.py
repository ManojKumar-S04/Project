import mysql.connector
db=mysql.connector.connect(host='localhost',user='root',password='Manoj@2002',database='project')
c=db.cursor()
def add():
    reg=input('\nEnter Register No: ')
    name=input('Enter the name: ')
    dob=input('Enter DOB(dd-mm-yy): ')
    prog=input('Enter course studied in vit: ')
    yp=int(input('Enter year of passing: '))
    cstat=input('Enter current status: ')
    mob=int(input('Enter mobile no: '))
    st='insert into alumni values(%s,%s,%s,%s,%s,%s,%s)'
    dtl=(reg,name,dob,prog,yp,cstat,mob)
    c.execute(st,dtl)
    db.commit()
    return
    
def update():
    reg=input('\nEnter the register no which you want to modify: ')
    col=input('which column you want to modify as what?\n')
    val=input()
    st='update alumni set {}=%s where reg_no=%s'.format(col)
    dtl2=(val,reg)
    c.execute(st,dtl2)
    db.commit()
    return

def disp():
    print('\nDETAILS OF ALUMNI STUDENTS:\n\n')
    print('   Reg_No      Name        date of birth            Prog P_Year C_Status    Mobile\n')
    c.execute('select * from alumni')
    for i in c:
        print(i)
    return

def p_disp(reg):
    st='select * from alumni where reg_no=%s'
    c.execute(st,(reg,))
    print('   Reg_No      Name        date of birth            Prog P_Year C_Status    Mobile\n')
    result=c.fetchall()
    for i in result:
        print(i)
    return

def delete(reg):
    st='delete from alumni where reg_no=%s'
    c.execute(st,(reg,))
    db.commit()
    disp()
    return

print('\n\n\n\t\t\t\t\t\t\t      VIT ALUMNI INFORMATION SYSTEM\n')
print('\n\t\t\t\t\tMENU:\n')
print('\t\t\t\t\t\t1.Add Alumni detail\n')
print('\t\t\t\t\t\t2.update Alumni detail\n')
print('\t\t\t\t\t\t3.display all Alumni detail\n')
print('\t\t\t\t\t\t4.display particular Alumni detail\n')
print('\t\t\t\t\t\t5.delete a Alumni\n')
print('\t\t\t\t\t\t6.Exit\n')
opt=int(input('Enter your choice: '))
while(True):
    if(opt==1):
        add()
        
    elif(opt==2):
        update()
        print('Updated Successfully!!!')
        
    elif(opt==3):
        disp()
        
    elif(opt==4):
        reg=input("Enter the register which to display: ")
        p_disp(reg)
        
    elif(opt==5):
        reg=input("Enter the register which you want to delete: ")
        delete(reg)
        print('Deleted Successfully!!!')
        
    elif(opt==6):
        print('\nByee!!!')
        break
    else:
        print('Wrong Input!!!')
    print('\n\t\t\t\t\tMENU:\n')
    print('\t\t\t\t\t\t1.Add Alumni detail\n')
    print('\t\t\t\t\t\t2.update Alumni detail\n')
    print('\t\t\t\t\t\t3.display all Alumni detail\n')
    print('\t\t\t\t\t\t4.display particular Alumni detail\n')
    print('\t\t\t\t\t\t5.delete a Alumni\n')
    print('\t\t\t\t\t\t6.Exit\n')
    opt=int(input('Enter your choice: '))








        


       
       

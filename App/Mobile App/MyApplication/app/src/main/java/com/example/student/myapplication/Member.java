package com.example.student.myapplication;

public class Member
{
    String name;
    String sname;
    String gender;
    String initial;
    String id;
    String address;
    String phone;

    public Member()
    {
        this.name = "Fname";
        this.sname = "Lname";
        this.gender = "sex";
        this.initial = "init";
        this.id = "0";
        this.address = "addr";
        this.phone = "cell";

    }
    public Member(String Fname, String Lname, String sex, String init, String id, String addr, String cell)
    {
        this.name = Fname;
        this.sname = Lname;
        this.gender = sex;
        this.initial = init;
        this.id = id;
        this.address = addr;
        this.phone = cell;
    }

    public String getName()
    {
        return this.name;
    }
    public String getSname()
    {
        return this.sname;
    }
    public String getGender()
    {
        return this.gender;
    }
    public String getInitial()
    {
        return this.initial;
    }
    public String getId()
    {
        return this.id;
    }
    public String getAddress()
    {
        return this.address;
    }
    public String getPhone()
    {
        return this.phone;
    }

    public void setName(String fName)
    {
        this.name = fName;
    }
    public void setSname(String lname)
    {
        this.sname = lname;
    }
    public void setGender(String sex)
    {
        this.gender = sex;
    }
    public void setInitial(String init)
    {
        this.initial = init;
    }
    public void setId(String id)
    {
        this.id = id;
    }
    public void setAddress(String add)
    {
        this.address = add;
    }
    public void setPhone(String cell)
    {
        this.phone = cell;
    }

}

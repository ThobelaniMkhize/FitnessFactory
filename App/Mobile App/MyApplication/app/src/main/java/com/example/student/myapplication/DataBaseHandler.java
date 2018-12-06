package com.example.student.myapplication;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

//import java.lang.reflect.Member;

public class DataBaseHandler extends SQLiteOpenHelper
{
    private static final int DATABASE_VERSION = 1;
    private static final String DATABASE_NAME = "Fitness";

    private static final String TABLE_MEMBER = "Member";
    private static final String KEY_NAME = "Fname";
    private static final String KEY_SURNAME = "surname";
    private static final String KEY_GENDER = "gender";
    private static final String KEY_INITIAL = "initial";
    private static final String KEY_ID = "memberID";
    private static final String KEY_ADDRESS = "address";
    private static final String KEY_PHONE = "phoneNo";


    public DataBaseHandler(Context context)
    {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);

    }

    @Override
    public void onCreate(SQLiteDatabase db)
    {
        String CREATE_MEMBER_TABLE = "CREATE TABLE " + TABLE_MEMBER + "("
                + KEY_NAME + " TEXT," + KEY_SURNAME + " TEXT,"
                + KEY_GENDER + " TEXT," + KEY_INITIAL + " TEXT,"
                + KEY_ID + " TEXT, " + KEY_ADDRESS + " TEXT," + KEY_PHONE +" TEXT "+ ")";
        db.execSQL(CREATE_MEMBER_TABLE);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion)
    {
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_MEMBER);
        onCreate(db);
    }
    void addMember(Member member)
    {
        SQLiteDatabase db = this.getWritableDatabase();

        ContentValues values = new ContentValues();
        values.put(KEY_NAME,member.getName());
        values.put(KEY_SURNAME,member.getSname());
        values.put(KEY_GENDER,member.getGender());
        values.put(KEY_INITIAL,member.getInitial());
        values.put(KEY_ID,member.getId());
        values.put(KEY_ADDRESS,member.getAddress());
        values.put(KEY_PHONE,member.getPhone());

        db.insert(TABLE_MEMBER,null,values);
        //insert
        db.close();
    }

    Member getMember(String id)
    {
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.query(TABLE_MEMBER, new String[]{KEY_NAME,KEY_SURNAME,KEY_GENDER,KEY_INITIAL,KEY_ID,KEY_ADDRESS,KEY_PHONE},KEY_ID+"=?",new String[]{String.valueOf(id)},null,null,null,null);
        Member member;
        if(cursor!=null)
        {
            cursor.moveToFirst();
            String name = cursor.getString(0);
            String sname = cursor.getString(1);
            String gender = cursor.getString(2);
            String init = cursor.getString(3);
            String key = cursor.getString(4);
            String address = cursor.getString(5);
            String phone = cursor.getString(6);
            member = new Member(name,sname,gender,init,key,address,phone);

            member = new Member(name,sname,gender,init,key,address,phone);


        }
        else
        {
            member = new Member("","","","","","","");

        }
        return member;
    }
}

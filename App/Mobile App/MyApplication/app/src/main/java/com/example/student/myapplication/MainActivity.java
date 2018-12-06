package com.example.student.myapplication;
import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;


public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        final Button homeButton = (Button) findViewById(R.id.btn1);
        homeButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent home = new Intent(getApplicationContext(), homeActivity.class);
                startActivity(home);
            }
        });

        Button aboutButton = (Button) findViewById(R.id.btn2);
        aboutButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent about = new Intent(getApplicationContext(), aboutActivity.class);
                startActivity(about);
            }
        });
        final Button logInButton = (Button) findViewById(R.id.btn3);
        logInButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent login = new Intent(getApplicationContext(), LogInActivity.class);
                startActivity(login);
            }
        });

        final DataBaseHandler db = new DataBaseHandler(this);
        final EditText name = (EditText) findViewById(R.id.txtName);
        final EditText sname = findViewById(R.id.txtSurname);
        final EditText gender = findViewById(R.id.txtGender);
        final EditText initial = findViewById(R.id.txtInitial);
        final EditText id = findViewById(R.id.txtID);
        final EditText address = findViewById(R.id.txtAdd);
        final EditText phone = findViewById(R.id.txtPhone);

        Button add = (Button) findViewById(R.id.btnInsert);
        add.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v)
            {
                try
                {
                    db.addMember(new Member(name.getText().toString(),sname.getText().toString(),gender.getText().toString(),initial.getText().toString(),id.getText().toString(),address.getText().toString(),phone.getText().toString()));
                    Snackbar.make(v,  "Contact succesfully created in database", Snackbar.LENGTH_LONG)
                            .setAction("Action", null).show();
                }
                catch(Exception ex)
                {
                    Snackbar.make(v, "An error occured could not insert contact", Snackbar.LENGTH_LONG)
                            .setAction("Action", null).show();
                }
            }
        });
    }
}

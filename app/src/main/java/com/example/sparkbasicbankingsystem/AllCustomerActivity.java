package com.example.sparkbasicbankingsystem;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;

import java.util.ArrayList;

public class AllCustomerActivity extends AppCompatActivity {
    ArrayList<CustomerModel> arrContacts = new ArrayList<>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_all_customer);

        RecyclerView recyclerView = findViewById(R.id.recyclerContact);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));

        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_foreground, "Sanjay Kumar Sah", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_foreground, "Sanjay Kumar Sah", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_foreground, "Sanjay Kumar Sah", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));
        arrContacts.add(new CustomerModel(R.drawable.ic_launcher_background, "Sanjay", "8797421521"));



        RecyclerCustomerAdapter recyclerCustomerAdapter = new RecyclerCustomerAdapter(this, arrContacts);
        recyclerView.setAdapter(recyclerCustomerAdapter);
    }
}
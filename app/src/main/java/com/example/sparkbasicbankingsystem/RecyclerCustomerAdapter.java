package com.example.sparkbasicbankingsystem;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.ArrayList;

public class RecyclerCustomerAdapter extends RecyclerView.Adapter<RecyclerCustomerAdapter.ViewHolder> {

    Context context;
    ArrayList<CustomerModel> arrayList;
    RecyclerCustomerAdapter(Context context, ArrayList<CustomerModel> arrayList){
        this.context = context;
        this.arrayList = arrayList;
    }
    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(context).inflate(R.layout.customer_row, parent, false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        holder.imgCustomer.setImageResource(arrayList.get(position).img);
        holder.txtName.setText(arrayList.get(position).name);
        holder.txtNumber.setText(arrayList.get(position).number);
    }

    @Override
    public int getItemCount() {
        return arrayList.size();
    }

    public static class ViewHolder extends  RecyclerView.ViewHolder{
        TextView txtName, txtNumber;
        ImageView imgCustomer;
        public ViewHolder(View itemView){
            super(itemView);
            txtName = itemView.findViewById(R.id.txtName);
            txtNumber = itemView.findViewById(R.id.txtNumber);
            imgCustomer = itemView.findViewById(R.id.imgCustomer);
        }
    }
}

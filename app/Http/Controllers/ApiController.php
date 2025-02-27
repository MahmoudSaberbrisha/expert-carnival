<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Method to get all products
    public function index()
    {
        $products = User::all();

        // Logic to retrieve all products
        return response()->json(['categories' => 'List of products']);
    }

    // Method to store a new product
    public function store(Request $request)
    {
        // Logic to store a new product
        return response()->json(['categories' => 'Product created successfully']);
    }

    // Method to get a specific product
    public function show($id)
    {
        // Logic to retrieve a specific product
        return response()->json(['categories' => 'Product details for ID: ' . $id]);
    }

    // Method to update a specific product
    public function update(Request $request, $id)
    {
        // Logic to update a specific product
        return response()->json(['categories' => 'Product updated successfully']);
    }

    // Method to delete a specific product
    public function destroy($id)
    {
        // Logic to delete a specific product
        return response()->json(['categories' => 'Product deleted successfully']);
    }
}

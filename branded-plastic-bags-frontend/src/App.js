import React from 'react';
import BagCostCalculator from './components/BagCostCalculator';
import ProductList from './components/ProductList';
import ProductForm from './components/ProductForm';
import './styles/App.css';

function App() {
  return (
    <div className="App">
      <h1>My React App</h1>
      <BagCostCalculator />
      <ProductList />
      <ProductForm />
    </div>
  );
}

export default App;

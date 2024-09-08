import React, { useState } from 'react';
import './BagCostCalculator.css';

function BagCostCalculator() {
  const [bagId, setBagId] = useState('');
  const [quantity, setQuantity] = useState('');
  const [result, setResult] = useState(null);

  const calculateCost = async () => {
    const response = await fetch('/api/calculate-cost', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ bag_id: bagId, quantity }),
    });
    const data = await response.json();
    setResult(data);
  };

  return (
    <div className="bag-cost-calculator">
      <h2>Calculate Bag Cost</h2>
      <input
        type="text"
        placeholder="Bag ID"
        value={bagId}
        onChange={(e) => setBagId(e.target.value)}
      />
      <input
        type="number"
        placeholder="Quantity"
        value={quantity}
        onChange={(e) => setQuantity(e.target.value)}
      />
      <button onClick={calculateCost}>Calculate</button>
      {result && (
        <div>
          <p>SubTotal: {result.subTotal}</p>
          <p>Tax Amount: {result.taxAmount}</p>
          <p>Total: {result.total}</p>
        </div>
      )}
    </div>
  );
}

export default BagCostCalculator;

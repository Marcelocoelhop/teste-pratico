import { useState } from "react";
export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = () => {
    setCount(count + 1)
     // setCount(previous => previous + 1) // Método alternativo
  };

  const decrement = () => {
    setCount(count - 1)
    // setCount(previous => previous - 1) // Método alternativo
  };

  return (
    <div className="container">
      <h1>{count}</h1>
      <div className="flex justify-between gap-2">
        <button
          type='button'
          onClick={increment}
        >
          Incrementar
        </button>
        <button
          type='button'
          onClick={decrement}
        >
          Decrementar
        </button>

      </div>
    </div>
  );
}

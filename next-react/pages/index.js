import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = () => {
    setCount(prev => prev + 1)
  };

  const decrement = () => {
    setCount(prev => prev - 1)
  };

  return (
    <div>
      <h1>{count}</h1>
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
  );
}

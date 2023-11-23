import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = () => {};

  const decrement = () => {};

  return (
    <div>
      <h1>0</h1>
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

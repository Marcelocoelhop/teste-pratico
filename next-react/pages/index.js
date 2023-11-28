import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = () => {
    let val = count
    val += 1
    setCount(val)
  };

  const decrement = () => {
    let val = count
    val -= 1
    setCount(val)
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

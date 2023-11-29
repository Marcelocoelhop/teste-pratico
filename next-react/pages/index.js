import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);
  return (
    <div>
      <h1>{count}</h1>      
      <button
        type='button'
        onClick={() => setCount(count + 1)}
      >
        Incrementar
      </button>
      <button
        type='button'
        onClick={() => setCount(count - 1)}
      >
        Decrementar
      </button>
    </div>
  );
}

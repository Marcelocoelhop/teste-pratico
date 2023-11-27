import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);
  
  // Não sei se era obrigado a fazer com as funções...

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
        onClick={() => count > 0 && setCount(count - 1)}
      >
        Decrementar
      </button>
    </div>
  );
}

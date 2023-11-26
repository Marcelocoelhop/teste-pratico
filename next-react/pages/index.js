import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = () => {setCount(count+1)};

  const decrement = () => {setCount(count-1)};

  return (
    <div class="container">
      <h1 class="header">{count}</h1>
      <div class="middle">
          <button
            type='button'
            class="button"
            onClick={increment}
          >
            Incrementar
          </button>
          <button
            type='button'
            class="button"
            onClick={decrement}
          >
            Decrementar
          </button>

      </div>
    </div>
  );
}

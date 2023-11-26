import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);

  // Função para incrementar o contador
  const increment = () => {
    setCount(count + 1); // Vai adicionando +1 toda vez que a função for chamada
  };

  // Função para decrementar o contador
  const decrement = () => {
    setCount(count - 1); // Diminui 1 toda vez que a função for chamada.
  };

  return (
    <div className="count">
      {/* Exibe o valor do count atual */}
      <h1>{count}</h1>
      {/* Botão que chama a função de incrementar */}
      <div className="buttons">
        <button
          type='button'
          onClick={increment}
        >
          Incrementar
        </button>
        {/* botão que chama a a função de decrementar */}
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


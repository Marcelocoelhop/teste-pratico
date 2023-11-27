import { useState } from "react";

export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = () => {
    setCount(count + 1);
  };

  const decrement = () => {
    setCount(count - 1);
  };

  return (
    <div className="container">
      <h1>{count}</h1>
      <div className="button-container">
        <button type='button' onClick={increment} className="button">
          Incrementar
        </button>
        <button type='button' onClick={decrement} className="button">
          Decrementar
        </button>
      </div>
      <style jsx>{`
        .container {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100vh;
          background-color: black;
          color: white;
        }

        .button-container {
          display: flex;
          justify-content: space-around;
          width: 15%;
        }

        .button {
          width: 120px;
          margin-top: 10px;
          padding: 10px;
          background-color: gray;
          color: white;
          border: none;
          cursor: pointer;
        }
      `}</style>
    </div>
  );
}

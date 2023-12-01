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
    <div 
      style={{
        display: 'flex',
        flexDirection: 'column',
        alignItems: 'center',
        justifyContent: 'center',
        fontSize: '300%',
        position: 'absolute',
        width: '100%',
        height: '100%',
        top: '-15%',
      }}>

      <h1>{count}</h1>
      
      <div>
        <button
          style={{
            fontSize: '50%',
            position: 'relative',
            marginLeft: '5px',
          }}
          type='button'
          onClick={increment}
        >
          Incrementar
        </button>
        <button
          style={{
            fontSize: '50%',
            position: 'relative',
            marginLeft: '5px',
          }}
          type='button'
          onClick={decrement}
        >
          Decrementar
        </button>
      </div>
    </div>
  );
}

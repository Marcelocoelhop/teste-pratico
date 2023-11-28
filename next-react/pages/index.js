import { useState } from "react";
import styles from "./styles.module.css";

export default function Contador() {
  const [count, setCount] = useState(0);

  const increment = (value) => {
    value += 1;
    setCount(value++);
  };

  const decrement = (value) => {
    value -= 1;
    setCount(value++);
  };

  return (
    <div>
      <h1 className={styles.Text}>{count}</h1>
      <button
        className={`${styles.Button} ${styles.Increment}`}
        type="button"
        onClick={() => increment(count)}
      >
        Incrementar
      </button>
      <button
        className={`${styles.Button} ${styles.Decrement}`}
        type="button"
        onClick={() => decrement(count)}
      >
        Decrementar
      </button>
    </div>
  );
}

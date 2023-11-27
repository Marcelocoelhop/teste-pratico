// Contador.test.js
import Contador from '@/pages';
import { render, fireEvent } from '@testing-library/react';

test('increments and decrements count correctly', () => {
  const { getByText } = render(<Contador />);
  const incrementButton = getByText('Incrementar');
  const decrementButton = getByText('Decrementar');
  const countDisplay = getByText('0');

  fireEvent.click(incrementButton);
  expect(countDisplay).toHaveTextContent('1');

  fireEvent.click(decrementButton);
  expect(countDisplay).toHaveTextContent('0');

  fireEvent.click(decrementButton);
  expect(countDisplay).toHaveTextContent('0');
  
});

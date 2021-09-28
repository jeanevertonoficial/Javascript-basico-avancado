function somentePares(n) {
  for (let i = n; i >= 0; i--) {
    if (i % 2 == 0) {
      console.log(`Do numero ${n} os pares são ${i}`);
    }
  }
}

somentePares(10);

<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-kmn](./kmc-kmn.md) &gt; [KmnCompiler](./kmc-kmn.kmncompiler.md) &gt; [init](./kmc-kmn.kmncompiler.init.md)

## KmnCompiler.init() method

Initialize the compiler, including loading the WASM host for kmcmplib. Copies options.

**Signature:**

```typescript
init(callbacks: CompilerCallbacks, options: KmnCompilerOptions): Promise<boolean>;
```

## Parameters

|  Parameter | Type | Description |
|  --- | --- | --- |
|  callbacks | CompilerCallbacks | Callbacks for external interfaces, including message reporting and file io |
|  options | [KmnCompilerOptions](./kmc-kmn.kmncompileroptions.md) | Compiler options |

**Returns:**

Promise&lt;boolean&gt;

false if initialization fails


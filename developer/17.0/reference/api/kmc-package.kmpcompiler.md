<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-package](./kmc-package.md) &gt; [KmpCompiler](./kmc-package.kmpcompiler.md)

## KmpCompiler class

Compiles a .kps file to a .kmp archive. The compiler does not read or write from filesystem or network directly, but relies on callbacks for all external IO.

**Signature:**

```typescript
export declare class KmpCompiler implements KeymanCompiler 
```
**Implements:** KeymanCompiler

## Properties

|  Property | Modifiers | Type | Description |
|  --- | --- | --- | --- |
|  [normalizePath](./kmc-package.kmpcompiler.normalizepath.md) | <code>readonly</code> | (path: string) =&gt; string |  |

## Methods

|  Method | Modifiers | Description |
|  --- | --- | --- |
|  [init(callbacks, options)](./kmc-package.kmpcompiler.init.md) |  | Initialize the compiler. Copies options. |
|  [run(inputFilename, outputFilename)](./kmc-package.kmpcompiler.run.md) |  | Compiles a .kps file to .kmp file. Returns an object containing binary artifacts on success. The files are passed in by name, and the compiler will use callbacks as passed to the [KmpCompiler.init()](./kmc-package.kmpcompiler.init.md) function to read any input files by disk. |
|  [write(artifacts)](./kmc-package.kmpcompiler.write.md) |  | <p>Write artifacts from a successful compile to disk, via callbacks methods. The artifacts written may include:</p><p>- .kmp file - binary keyboard package used by Keyman on desktop and touch platforms</p> |


<?php
require_once('includes/template.php');

head([
    'title' => "Error Codes"
]);
?>

<h1>Error Codes</h1>

<!-- Reference: https://github.com/keymanapp/keyman/blob/master/windows/src/global/inc/Comperr.h -->
<h2 id="Specifications" name="Specifications">Specifications</h2>
<table class="standard-table">
    <tbody>
    <tr>
        <th scope="col">Error / Code (Hex)</th>
        <th scope="col">Message / Explanation</th>
    </tr>

    <tr>
        <td rowspan="2">CERR_FATAL<br>8000</td>
        <td>Msg:</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_ERROR<br>4000</td>
        <td>Msg:</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_WARNING<br>2000</td>
        <td>Msg:</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_MEMORY<br>1000</td>
        <td>Msg:</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_None<br>0000</td>
        <td>Msg: (no error)</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_EndOfFile<br>0001</td>
        <td>Msg: (no error - reserved code)</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_BadCallParams<br>8002</td>
        <td>Msg: CompileKeyboardFile was called with bad parameters</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CannotAllocateMemory<br>9004</td>
        <td>Msg: Out of memory</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InfileNotExist<br>8005</td>
        <td>Msg: Cannot find the input file</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CannotCreateOutfile<br>8006</td>
        <td>Msg: Cannot open output file for writing</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_UnableToWriteFully<br>8007</td>
        <td>Msg: Unable to write the file completely</td>
    </tr>
    <tr>
        <td>Explanation: This may be indicative of a disk error</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CannotReadInfile<br>8008</td>
        <td>Msg: Cannot read the input file - possible disk error</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_SomewhereIGotItWrong<br>8009</td>
        <td>Msg: Internal error: contact SIL community site</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_InvalidToken<br>400A</td>
        <td>Msg: Invalid token found</td>
    </tr>
    <tr>
        <td>Explanation: This means that there is a character or symbol in your source file which is unexpected at this
            point in the file.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidBegin<br>400B</td>
        <td>Msg: Invalid 'begin' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidName<br>400C</td>
        <td>Msg: Invalid 'name' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidVersion<br>400D</td>
        <td>Msg: Invalid 'version' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidLanguageLine<br>400E</td>
        <td>Msg: Invalid 'language' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_LayoutButNoLanguage<br>400F</td>
        <td>Msg: Layout command found but no language command</td>
    </tr>
    <tr>
        <td>Explanation: This is a legacy error; layout and language commands are not used in v10 and later Keyman keyboards</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidLayoutLine<br>4010</td>
        <td>Msg: Invalid 'layout' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_NoVersionLine<br>4011</td>
        <td>Msg: No version line found for file</td>
    </tr>
    <tr>
        <td>Explanation: This error does not occur with version 10 compiler. If the version line is missing,
            the compiler deduces the minimum version from the features in use and reports that.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidGroupLine<br>4012</td>
        <td>Msg: Invalid 'group' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidStoreLine<br>4013</td>
        <td>Msg: Invalid 'store' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidCodeInKeyPartOfRule<br>4014</td>
        <td>Msg: Invalid command or code found in key part of rule</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidDeadkey<br>4015</td>
        <td>Msg: Invalid 'deadkey' or 'dk' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidValue<br>4016</td>
        <td>Msg: Invalid value in extended string</td>
    </tr>
    <tr>
        <td>Explanation: This means that a string contains an invalid character, such as U+123456 (U+10FFFF is the
            maximum possible Unicode value)</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_ZeroLengthString<br>4017</td>
        <td>Msg: A string of zero characters was found</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_TooManyIndexToKeyRefs<br>4018</td>
        <td>Msg: Too many index commands refering to key string</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_UnterminatedString<br>4019</td>
        <td>Msg: Unterminated string in line</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_StringInVirtualKeySection<br>401A</td>
        <td>Msg: extended string illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_AnyInVirtualKeySection<br>401B</td>
        <td>Msg: 'any' command is illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidAny<br>401C</td>
        <td>Msg: Invalid 'any' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_StoreDoesNotExist<br>401D</td>
        <td>Msg: Store referenced does not exist</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_BeepInVirtualKeySection<br>401E</td>
        <td>Msg: 'beep' command is illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_IndexInVirtualKeySection<br>401F</td>
        <td>Msg: 'index' command is illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidIndex<br>4020</td>
        <td>Msg: Invalid 'index' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_OutsInVirtualKeySection<br>4021</td>
        <td>Msg: 'outs' command is illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidOuts<br>4022</td>
        <td>Msg: Invalid 'outs' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_ContextInVirtualKeySection<br>4024</td>
        <td>Msg: 'context' command is illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidUse<br>4025</td>
        <td>Msg: Invalid 'use' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_GroupDoesNotExist<br>4026</td>
        <td>Msg: Group does not exist</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_VirtualKeyNotAllowedHere<br>4027</td>
        <td>Msg: Virtual key is not allowed here</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidSwitch<br>4028</td>
        <td>Msg: Invalid 'switch' command</td>
    </tr>
    <tr>
        <td>Explanation: Switch is an undocumented legacy feature. Don't use it.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_NoTokensFound<br>4029</td>
        <td>Msg: No tokens found in line</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidLineContinuation<br>402A</td>
        <td>Msg: Invalid line continuation</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_LineTooLong<br>402B</td>
        <td>Msg: Line too long</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidCopyright<br>402C</td>
        <td>Msg: Invalid 'copyright' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CodeInvalidInThisSection<br>402D</td>
        <td>Msg: This line is invalid in this section of the file</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidMessage<br>402E</td>
        <td>Msg: Invalid 'message' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidLanguageName<br>402F</td>
        <td>Msg: Invalid 'languagename' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidBitmapLine<br>4030</td>
        <td>Msg: Invalid 'bitmaps' command</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CannotReadBitmapFile<br>4031</td>
        <td>Msg: Cannot open the bitmap file for reading</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_IndexDoesNotPointToAny<br>4032</td>
        <td>Msg: An index() in the output does not have a corresponding any() statement</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_ReservedCharacter<br>4033</td>
        <td>Msg: A reserved character was found</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidCharacter<br>4034</td>
        <td>Msg: A character was found that is outside the valid Unicode range (U+0000 - U+10FFFF)</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidCall<br>4035</td>
        <td>Msg: The 'call' command is invalid</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CallInVirtualKeySection<br>4036</td>
        <td>Msg: 'call' command is illegal in virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CodeInvalidInKeyStore<br>4037</td>
        <td>Msg: The command is invalid inside a store that is used in a key part of the rule</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_CannotLoadIncludeFile<br>4038</td>
        <td>Msg: Cannot load the included file: it is either invalid or does not exist</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_60FeatureOnly_EthnologueCode<br>4039</td>
        <td>Msg: EthnologueCode system store requires VERSION 6.0</td>
    </tr>
    <tr>
        <td>Explanation: system store requires Version 6.0 or later</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_60FeatureOnly_MnemonicLayout<br>403A</td>
        <td>Msg: MnemonicLayout functionality requires VERSION 6.0</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_60FeatureOnly_OldCharPosMatching<br>403B</td>
        <td>Msg: OldCharPosMatching system store requires VERSION 6.0</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_60FeatureOnly_NamedCodes<br>403C</td>
        <td>Msg: Named character constants requires VERSION 6.0</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_60FeatureOnly_Contextn<br>403D</td>
        <td>Msg: Context(n) requires VERSION 6.0</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_501FeatureOnly_Call<br>403E</td>
        <td>Msg: Call() requires VERSION 5.01</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_InvalidNamedCode<br>403F</td>
        <td>Msg: Invalid named code constant</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidSystemStore<br>4040</td>
        <td>Msg: Invalid system store name found</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_CallIsProfessionalFeature<br>4041</td>
        <td>Msg: Call() is only available in Keyman Developer Professional</td>
    </tr>
    <tr>
        <td>Explanation: This is no longer relevant and will never be raised.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_IncludeCodesIsProfessionalFeature<br>4042</td>
        <td>Msg: &IncludeCodes is only available in Keyman Developer Professional</td>
    </tr>
    <tr>
        <td>Explanation: This is no longer relevant and will never be raised.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_MnemonicLayoutIsProfessionalFeature<br>4043</td>
        <td>Msg: &MnemonicLayout is only available in Keyman Developer Professional</td>
    </tr>
    <tr>
        <td>Explanation: This is no longer relevant and will never be raised.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_60FeatureOnly_VirtualCharKey<br>4044</td>
        <td>Msg: Virtual character keys require VERSION 6.0</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_VersionAlreadyIncluded<br>4045</td>
        <td>Msg: Only one VERSION or store(&version) line allowed in a source file.</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_70FeatureOnly<br>4046</td>
        <td>Msg: This feature requires store(&version) '7.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_80FeatureOnly<br>4047</td>
        <td>Msg: This feature requires store(&version) '8.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidInVirtualKeySection<br>4048</td>
        <td>Msg: This statement is not valid in a virtual key section</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidIf<br>4049</td>
        <td>Msg: The if() statement is not valid</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidReset<br>404A</td>
        <td>Msg: The reset() statement is not valid</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidSet<br>404B</td>
        <td>Msg: The set() statement is not valid</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidSave<br>404C</td>
        <td>Msg: The save() statement is not valid</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_InvalidEthnologueCode<br>404D</td>
        <td>Msg: Invalid &ethnologuecode format</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_CannotCreateTempfile<br>804E</td>
        <td>Msg: Cannot create temp file</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_90FeatureOnly_IfSystemStores<br>404F</td>
        <td>Msg: if(&store) requires store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_IfSystemStore_NotFound<br>4050</td>
        <td>Msg: System store in if() not found</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_90FeatureOnly_SetSystemStores<br>4051</td>
        <td>Msg: set(&store) requires store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_SetSystemStore_NotFound<br>4052</td>
        <td>Msg: System store in set() not found</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_90FeatureOnlyVirtualKeyDictionary<br>4053</td>
        <td>Msg: Custom virtual key names require store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td rowspan="2">CERR_NotSupportedInKeymanWeb<br>4054</td>
        <td>Msg:</td>
    </tr>
    <tr>
        <td>Explanation: Certain functionality is not available in KeymanWeb, mostly legacy Windows-specific functionality.</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_NotSupportedInKeymanWebContext<br>4054</td>
        <td>Msg: Statement is not currently supported in context</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_NotSupportedInKeymanWebOutput<br>4055</td>
        <td>Msg: Statement is not currently supported in output</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_NotSupportedInKeymanWebStore<br>4056</td>
        <td>Msg: Statement is not currently supported in store</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_VirtualCharacterKeysNotSupportedInKeymanWeb<br>4057</td>
        <td>Msg: Virtual character keys not currently supported in KeymanWeb</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_VirtualKeysNotValidForMnemonicLayouts<br>4058</td>
        <td>Msg: Virtual keys are not valid for mnemonic layouts</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidTouchLayoutFile<br>4059</td>
        <td>Msg: Invalid touch layout file</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_TouchLayoutInvalidIdentifier<br>405A</td>
        <td>Msg: Key [ID] on [platform], layer [l] has an invalid identifier</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_InvalidKeyCode<br>405B</td>
        <td>Msg: Invalid key identifier</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_90FeatureOnlyLayoutFile<br>405C</td>
        <td>Msg: Touch layout file reference requires store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_90FeatureOnlyKeyboardVersion<br>405D</td>
        <td>Msg: KeyboardVersion system store requires store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_KeyboardVersionFormatInvalid<br>405E</td>
        <td>Msg: KeyboardVersion format is invalid, expecting dot-separated integers</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_ContextExHasInvalidOffset<br>405F</td>
        <td>Msg: context() statement has offset out of range</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_90FeatureOnlyEmbedCSS<br>4060</td>
        <td>Msg: Embedding CSS requires store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_90FeatureOnlyTargets<br>4061</td>
        <td>Msg: &TARGETS system store requires store(&version) '9.0'</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    <tr>
        <td rowspan="2">CERR_ContextAndIndexInvalidInMatchNomatch<br>4062</td>
        <td>Msg: context and index statements cannot be used in a match or nomatch statement</td>
    </tr>
    <tr>
        <td>Explanation:</td>
    </tr>
    </tbody>
</table>

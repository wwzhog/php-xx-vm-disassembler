<?php
function func1()
{
    static $a = null;
    if ($a === null) {
        $a = gzinflate(base64_decode("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"));
    }
    return $a;
}

func(123);

function func()
{
    global $v7;
    $v0 = gzinflate(base64_decode("ZVPNbtNAEP6cEIfWhSZ2gk1aCpSfQkrbJE1iFyg0jQTHRihFvXJo4YAEAoEECCEk7nDgHehTIPEMPAEXLrwCB2bHO6tdEynWzs7P983Mt+Ppo+zl3nSymr0+Oti8/3j36cbk6N7kxcO3o/Grg2cPPGwCCDAAmu/p5CkzwU2gtaLMHn1mAqDykQ4Rh7aBuV8S2kQNCCfK7KtPR31S+sziElD9gvwXYAQsHkvWWbSAOmWi1O1oBCqV/2sYU0Jb0L2cYCr5fTZXbBI+rmn6NSwTnaqQYG+EeWD+t4ap/6XDGa4R2DUidbmwrvl6h4b4DZt4DKJb/aSdPJivdGhwZMOODLAg5Xs80tO6Y28oDe9zQRW65DIJLb6VP5ytoih26YeKyvjqCjVecnZEiOqWKtyxKvg0Tgy5Qs9mmGBdKA2EUltTimlFbp9+WbsSXJf1ZJL2XFnsu/qfcJ6YvEWBk7zwnZ5djMtFuDd6TRF2rV7KAy2SACell5SL3yUzFZOLk4aRk64XioeHRgMld2ezYmZs3pZXkXKdrSLJln4Uaj/Fvnd0bwmq0rf4ws86J8ZOsaS4IpzSXDiDJKFETtertjg+qCfEhW4VdfldTypRDHP8LdnXyMy9W0z7aeR20Z1F053UjJi5un3B6AoGNH6MC0WMYz3+GJWia2peU+Li9e0nEmDNfTFDW+9rZrtl2V+HzW1X/qTYSsOWjBlngA0X7rwLd4IAzGq2zWrmrI353yhvn5PPSXI+yMyw+Ac="));
    // $v1 = eval(gzinflate(base64_decode("TZOxThwxEIZ7nsISBRAFwS57BxdEpCS6MjQoFDSW1zt752Ds1XgNOYoUeZG8AE+DIhp6XoA6Eot/70E53+yO55uxmfrITihmtRLbG0Lsi5PPYst35EKwsiHNq67f+jhkipRhCj6ypoTKhELPxi0SOEhASu3dQKPGn1Wi0TXUpniS4iuj2ffmCqWmiRmHPw5TtDSioTouFsS/Ez5Cc/VPypVnCbTKBlQp0H5xjAgtX0zmLmmI8+9izuz5k/jhlso1lhp8CJHGx9rmQjAZHHJcZfuWmFzWLyDycP/v6fn/3ePfP6BQSSNQ2aeAkFbWqvURsHHRWsSzcQTXCqTcz5ViLlMW48A7H0DKdWEZA7Fso9MyrRN5eCxujWut6vPaILPpO+0bOntbXwkhRzcIYfJlfrZblEe7829fgSFTe5/bhEg6VF7SStIvE/rcH6SuvcGkD6BkgkQIIXpdCgB8nNo7vQWAQNfnfPXurM53gJM3CDB991UgxXoJntewd/oBMToPsQ5j/dk4YUsOlxcdx2CJcFxV5EU1hseLWKHvWgWaVq/PZhgsEujf9MTrzVfjg+iUvhzIzvEL")));
    $v8 = true;
    $v9 = ['undef', 'null', 'false', 'true', 'int', 'double', 'string', 'array', 'object', 'resource', 'reference', 'constant', null, 'bool', 'callable', 'indirect', null, 'ptr', 'void', 'iterable', 'error'];
    while ($v8) {
        $v8 = false;
        $v11 = [];
        $v12 = strpos($v0, "\1");
        $v13 = substr($v0, $v12 + 3);
        $v4 = unpack("n", substr($v0, $v12 + 1, 2));
        $v14 = $v4[1];
        unset($v4);
        $v4 = 0;
        $v15 = strlen($v13);
        unset($v12);
        while ($v4 < $v15) {
            $v12 = unpack("N", substr($v13, $v4, 4));
            $v17 = $v12[1];
            $v18 = unpack('na/Nz', substr($v13, $v4 + 4, 6));
            $v18['s'] = substr($v13, $v4 + 10, $v17 - 6);
            unset($v12);
            $v19 = 0;
            $v12 = strlen($v18['s']);
            $v20 = [''];
            while ($v19 < $v12) {
                $v21 = unpack("N", substr($v18['s'], $v19, 4));
                $v20[] = $v21[1] > 0 ? substr($v18['s'], $v19 + 4, $v21[1]) : '';
                $v19 += $v21[1] + 4;
            }
            unset($v12);
            $v18['s'] = $v20;
            $v11[] = $v18;
            $v4 += $v17 + 4;
            unset($v17);
        }
        $v7 = [];
        $v29 = [];
        $v30 = [];
        $v31 = 0;
        $v32 = [];
        $v24 = '';
        $v33 = null;
        $v13 = null;
        $v34 = false;
        $v35 = null;
        $v36 = count($v11);
        $v12 = strpos($v0, "\1");
        $v24 = base64_decode(substr($v0, 0, $v12));
        $v23 = substr($v24, 1);
        if ($v23[0] == 0) {
            return substr($v23, 1);
        }
        $v25 = intval($v23[0]);
        $v26 = substr($v23, 0, $v25 + 1);
        $v27 = substr($v23, $v25 + 1);
        $v28 = openssl_decrypt($v27, 'AES-128-ECB', $v26, OPENSSL_RAW_DATA);
        if ($v24[0] === "\\6") {
            $v5 = $v28;
        } else {
            $v5 = eval("return {$v28};");
        }
        unset($v12);
        $v6 = $v36 * 3;
        while ($v14 < $v36) {
            $v37 = $v11[$v14];
            if (!$v37) {
                throw new Exception('Z5Encrypt VM Error: Unhandled');
            }
            $v38 = $v37['s'];
            $v39 = $v37['z'];
            $v14 = $v37['a'];
            switch ($v39) {
                case 0x1a67:
                    $v7[$v38[1]] = __SHAREVM_FUNCTION__;
                    break;
                case 0x1d89:
                    $v35 = get_value($v38[1]);
                    $v14 = $v36;
                    break;
                case 0x930:
                    $v30[$v31 - 1][1][] = get_value($v38[1]);
                    break;
                case 0x1384:
                    $v7[$v38[1]] = __CLASS__;
                    break;
                case 0xb2a:
                    if (count($v38) > 4) {
                        $v7[$v38[1]] = $v7[$v38[2]] = get_value($v38[3]);
                    } else {
                        $v7[$v38[1]] = get_value($v38[2]);
                    }
                    break;
                case 0xfe6:
                    $v30[$v31 - 1][1][] = get_value($v38[1]);
                    break;
                case 0xac3:
                    $v14 = (bool)get_value($v38[1]) ? get_value($v38[2]) - 1 : $v14;
                    break;
                case 0x189e:
                    $v33 =& $v7[$v38[2]];
                    $v7[$v38[1]] = count($v33);
                    unset($v33);
                    break;
                case 0x14b9:
                    $v40 = 'is_' . $v9[substr($v38[4], 2)];
                    $v7[$v38[1]] = $v40(get_value($v38[2]));
                    break;
                case 0x1783:
                    $v7[$v38[1]] = get_value($v38[2]) + get_value($v38[3]);
                    break;
                case 0x1b2e:
                    if ($v38[3] !== '') {
                        $v40 = $v38[3];
                        $v12 = $v38[2];
                    } else {
                        $v40 = $v38[2];
                        $v12 = $v38[1];
                    }
                    $v12 = get_value($v12);
                    if ($v40 === 'e') {
                        $v40 = eval($v12);
                    } else {
                        if ($v40 === 'i') {
                            $v40 = (include_once $v12);
                        } else {
                            $v40 = (include $v12);
                        }
                    }
                    if ($v38[3] !== '') {
                        $v7[$v38[1]] = $v40;
                    }
                    break;
                case 0x602:
                    $v40 = get_value($v38[2]);
                    if ($v40 === '') {
                        $v40 = __CLASS__;
                    }
                    $v30[] = [$v40, [], ['new', $v38[1]]];
                    $v31++;
                    break;
                case 0x6f9:
                    $v7[$v38[1]] = get_value($v38[2]) < get_value($v38[3]);
                    break;
                case 0x11af:
                    $v30[] = [get_value($v38[1]), []];
                    $v31++;
                    break;
                case 0x1ec1:
                    $v7[$v38[1]] = __FUNCTION__;
                    break;
                case 0x514:
                    $v7[$v38[1]] = get_value($v38[1]) - get_value($v38[2]);
                    break;
                case 0x72c:
                    $v34 = false;
                    break;
                case 0x561:
                    break;
                case 0x16a8:
                    echo get_value($v38[1]);
                    break;
                case 0x614:
                    break;
                case 0x1a27:
                    if ($v38[1] === "") {
                        $v33 = $this;
                    } else {
                        $v33 = get_value($v38[1]);
                    }
                    $v30[] = [[$v33, get_value($v38[2])], []];
                    $v31++;
                    break;
                case 0x790:
                    exit(get_value($v38[1]));
                    break;
                case 0xedc:
                    break;
                case 0x1ca8:
                    $v30[$v31 - 1][1][] = get_value($v38[1]);
                    break;
                case 0x784:
                    $v30[] = [get_value($v38[2]), []];
                    $v31++;
                    break;
                case 0x16fd:
                    unset($v7[$v38[1]]);
                    break;
                case 0xb6f:
                    $v7[$v38[1]] = get_value($v38[2]) * get_value($v38[3]);
                    break;
                case 0xce1:
                    $v32 = array_pop($v30);
                    $v31--;
                    if ($v34) {
                        $v41 = @call_user_func_array($v32[0], $v32[1]);
                    } else {
                        $v41 = call_user_func_array($v32[0], $v32[1]);
                    }
                    if ($v38[1] !== '') {
                        $v7[$v38[1]] = $v41;
                    }
                    break;
                case 0x12ba:
                    $v40 = $v7[$v38[1]];
                    $v14 = ($v40 ? $v7[$v38[2]] : $v7[$v38[3]]) - 1;
                    break;
                case 0xa33:
                    $v7[$v38[1]] = get_value($v38[2]) == get_value($v38[3]);
                    break;
                case 0x1250:
                    $v7[$v38[1]] = get_value($v38[2]) - get_value($v38[3]);
                    break;
                case 0x1c37:
                    $v14 = (bool)get_value($v38[1]) ? $v14 : get_value($v38[2]) - 1;
                    break;
                case 0x13c5:
                    $v7[$v38[1]] = get_value($v38[2]) === get_value($v38[3]);
                    break;
                case 0x12c2:
                    $v7[$v38[1]] = get_value($v38[2]) !== get_value($v38[3]);
                    break;
                case 0x1110:
                    $v40 = get_value($v38[2]);
                    $v7[$v38[1]] =& ${$v40};
                    break;
                case 0xfea:
                    $v7[$v38[1]] = (bool)get_value($v38[2]);
                    break;
                case 0x936:
                    $v34 = true;
                    break;
                case 0x157d:
                    $v32 = array_pop($v30);
                    $v31--;
                    if (isset($v32[2])) {
                        if ($v32[2][0] === 'new') {
                            $v42 = new ReflectionClass($v32[0]);
                            if ($v42->hasMethod('__construct')) {
                                if ($v34) {
                                    $v43 = @$v42->newInstanceArgs($v32[1]);
                                } else {
                                    $v43 = $v42->newInstanceArgs($v32[1]);
                                }
                            } else {
                                if ($v34) {
                                    $v43 = @$v42->newInstance();
                                } else {
                                    $v43 = $v42->newInstance();
                                }
                            }
                            $v7[$v32[2][1]] = $v43;
                        }
                    } else {
                        if ($v34) {
                            $v41 = @call_user_func_array($v32[0], $v32[1]);
                        } else {
                            $v41 = call_user_func_array($v32[0], $v32[1]);
                        }
                        if ($v38[1] !== '') {
                            $v7[$v38[1]] = $v41;
                        }
                    }
                    break;
                case 0x1207:
                    $v7[$v38[1]] = !(bool)get_value($v38[2]);
                    break;
            }
        }
        foreach ($v7 as $v44 => &$v29) {
            unset($v7[$v44]);
        }
        unset($v11);
        unset($v7);
        unset($v29);
        unset($v30);
        unset($v32);
        unset($v40);
        unset($v33);
    }
    return $v35;
}

function get_value($key)
{
    static $varMap = [];
    if (empty($varMap)) {
        $varMap = include 'varMap.php';
    }
    $value = _get_value($key);
    if (is_string($value)) {
        if (array_key_exists($value, $varMap)) {
            $value = $varMap[$value];
        }
    }
    // echo $value;
    return $value;
}

function _get_value($key)
{
    global $v7;
    if ($key === "") {
        return "";
    } else {
        if (array_key_exists($key, $v7)) {
            return $v7[$key];
        } else {
            $v13 = unpack('c/N*', $key);
            $v18 = substr(func1(), $v13[1], $v13[2]);
            $v13 = $v18[0];
            if ($v13 === "\x06" || $v13 === "\x09") {
                $v24 = $v18;
                $v23 = substr($v24, 1);
                if ($v23[0] == 0) {
                    return substr($v23, 1);
                }
                $v25 = intval($v23[0]);
                $v26 = substr($v23, 0, $v25 + 1);
                $v27 = substr($v23, $v25 + 1);
                $v28 = openssl_decrypt($v27, 'AES-128-ECB', $v26, OPENSSL_RAW_DATA);
                if ($v24[0] === "\x06") {
                    return $v28;
                } else {
                    return eval("return {$v28};");
                }
            } elseif ($v13 === "\x04") {
                return (int)substr($v18, 1);
            } elseif ($v13 === "\x05") {
                return (double)substr($v18, 1);
            } elseif ($v13 === "\x07") {
                return true;
            } elseif ($v13 === "\x08") {
                return false;
            } else {
                return null;
            }
        }
    }
}